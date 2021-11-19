// Đối tượng 'Validator'

function Validator (option){
    // lấy cha element
    function getParent(element,selector){
        while(element.parentElement){
            if(element.parentElement.matches(selector)){// kiểm tra đã đúng parentElement cần tìm
                return element.parentElement;
            }
            element=element.parentElement;
        }
    }

    var selectorRules ={};
    function validate(inputElement , rule){
        console.log('sài nè');
        var errorElement = getParent(inputElement , option.form_group).querySelector(option.form_message);
        var errorMessage;
        var rules = selectorRules[rule.selector];

        for (var i =0 ; i< rules.length; i++){
            switch(inputElement.type){
                case'radio':
                case 'checkbox':
                    errorMessage=rules[i](
                        formElement.querySelector(rule.selector + ':checked')
                        );
                    break;
                default:
                    errorMessage=rules[i](inputElement.value);
            }
            if(errorMessage) break;
        }
        console.log(errorMessage);
        if(errorMessage){
            errorElement.innerText = errorMessage;
            console.log( getParent(inputElement,option.form_group));
            getParent(inputElement,option.form_group).classList.add('invalid');
        }
        else{
            errorMessage.innerText ='';
            getParent(inputElement,option.form_group).classList.remove('invalid');
        }
        return !errorMessage;
    }

    var formElement = document.querySelector(option.form);

    if(formElement){
        // submit 
        //formElement



        option.rules.forEach(function (rule){
            var inputElement = formElement.querySelector(rule.selector);
            if(Array.isArray(selectorRules[rule.selector])){
                selectorRules[rule.selector].push(rule.test);
            }else{
                selectorRules[rule.selector]=[rule.test];// lưu function vào mảng 
            }
           
            if(inputElement){
                
                inputElement.onblur = function(){ //onblur  sự kiện khi đưa con trỏ đi ra ngoài
                    // console.log(inputElement.value);//inputElement.value giá trị nhập trong thẻ input 
                    // inputElement.parentElement : lấy ra cha của thẻ
                    // value : inputElement.value
                    // test fiunc : rule.test
                    
                    validate(inputElement,rule); 
                    // xủa lúy trường hợp người dùng nhập
                    inputElement.oninput=function(){
                        var errorElement = inputElement.parentElement.querySelector('.form-mesage');
                        errorElement.innerText= '';
                        inputElement.parentElement.classList.remove('invalid');
                    }
                }
            }
           
        });
    }


}

// định nghĩa các rule 
Validator.isRequired=function(selector,message){
    return {
        selector: selector,
        test : function(value){
            return value ? undefined: message || 'Vui lòng nhập trường này';
        }
    };
}

Validator.isEmail=function(selector,mesage){
    return {
        selector: selector,  
        test : function (value)
        {
            var regex =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value)? undefined :  mesage ||'Trường này phải là email';
        }
    }
}

Validator.minlength=function(selector,min,mesage){
    return {
        selector: selector,  
        test : function (value)
        {
            return value.length >=min? undefined :  mesage ||`Vui lòng nhập tối thiếu ${min} lkys tự`;
        }
    }
}
Validator.isConfirmed = function(selector,getConfirmValue,mesage){
    return{
         selector: selector,
         test: function(value){
            return value=== getConfirmValue()? undefined : mesage || 'Gía trị nhập vào không chính xác'
         }
    }
}