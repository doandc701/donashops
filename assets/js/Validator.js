// Đối tượng `Validator`
function Validator(options) {

    // Hàm thực hiện
    function Validate(inputElement, rule) {
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
        var errorMessage = rule.test(inputElement.value);
        if(errorMessage)
        {
            errorElement.innerText = errorMessage;
        }else
        {
            errorElement.innerText = "";
        }
    }

    // Lấy form
   var formElement = document.querySelector(options.form);
   if(formElement){
      options.rules.forEach(function(rule) {
      var inputElement = formElement.querySelector(rule.selector);
      
      if(inputElement){

        // Xử lý trường hợp blur
          inputElement.onblur = function() {
            //values : inputElement.values
            // test function:rule.test
            Validate(inputElement,rule);
        }

        // Xử lý trường hợp người dùng nhập
        inputElement.oninput= function (){
        var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
            errorElement.innerText="";
        }
      }
      });
   }
}
 
// Định nghĩa rules
//Nguyên tắc của các rules
// 1 Khi có lỗi trả ra message lỗi
// 2 Khi hợp lệ không trả ra gì
Validator.isRequired = function (selector) {
    return {
        selector: selector,
        // Kiểm tra người dùng đã nhập chưa
        test: function (value) {
            return value.trim() ? undefined : 'Vui lòng nhập trường này'
        }
    };

}
Validator.isEmail = function (selector) {
 return {
        selector: selector,
        // Kiểm tra có đúng email không
        test: function (value) {
            var regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                return regex.test(value) ? undefined : ' Trường này phải là email';
        }
    };
}
Validator.minLength = function (selector,min) {
    return {
        selector: selector,

        test: function(value) {
            return value.length >= min ? undefined : `Nhập tối thiểu ${min} ký tự `
        }
    };
}
Validator.isConfirmed =function (selector,getCofirmedValue,message) {
    return {
        selector: selector,
        test: function(value) {
            return value == getCofirmedValue() ? undefined : message || 'Giá trị nhập lại không đúng';
        }
    }
}