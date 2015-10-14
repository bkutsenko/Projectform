$(document).ready(function(){

    $("#form").validate({

       rules:{
            name:{
                required: true,
            },
            
            s_name:{
                required: true,
            },
           
            anw:{
                required: true,
            },
           
            login:{
                required: true,
                minlength: 4,
                maxlength: 16,
            },

            pswd:{
                required: true,
                minlength: 6,
                maxlength: 16,
            },
           
            s_pswd:{
                required: true,
                equalTo: "#pswd",
            },
           
            email:{
               required: true,
               email: true,
            },
       },

       messages:{

            name:{
                required: "Это поле обязательное для заполнения",
            },
            
            s_name:{
                required: "Это поле обязательное для заполнения",
            },
           
            anw:{
                required: "Это поле обязательное для заполнения",
            },
           
            login:{
                required: "Это поле обязательное для заполнения",
                minlength: "Минимум 4 символа",
                maxlength: "Максимум 16 символов",
            },

            pswd:{
                required: "Это поле обязательно для заполнения",
                minlength: "Пароль должен быть минимум 6 символа",
                maxlength: "Пароль должен быть максимум 16 символов",
            },
           
            email:{
               required: "Это поле обязательно для заполнения",
               email: "Email содержит не допустимые символы",
            },
           
            s_pswd:{
                required: "Это поле обязательно для заполнения",
                equalTo: "Пароли не совпадают",
            },
       },

    });

});