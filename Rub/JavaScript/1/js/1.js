document.getElementById('1').addEventListener("submit", checkForm);
function checkForm(event) {
    event.preventDefault();
    var fo = document.getElementById('1');
    var name = fo.user_name.value;
    var email = fo.user_email.value;
    var phone = fo.user_phone.value;
    var message = fo.user_message.value;
    var fail = "";

    if (name == "" || email == "" || phone == "" || message =="")
        fail = "Заполните все поля";
    else if (email.indexOf('@') === -1)
        fail = "Нет символа @ в поле email ";
    else if (message.length <= 50 || message.length > 400)
        fail = "Сообщение меньше 50 или больше 400 символов";


    if ( fail != "")
        document.getElementById('output_error').innerHTML = fail;

    else{
        // document.getElementById('user_name').value = "";
        // document.getElementById('user_email').value = "";
        // document.getElementById('user_phone').value = "";
        // document.getElementById('user_sms').value = "";

        document.getElementById('com').innerHTML += `<div style="padding: 30px; border: 1px solid black; background: grey; margin: 5px"> 
        Email: ${email} <br>  
        Name: ${name} <br> 
        Phone: ${phone} <br> 
        ${message} 
        </div>`;

        fo.user_name.value = "";
        fo.user_name.style.border = "5px solid green";

        fo.user_email.value = "";
        fo.user_email.style.border = "5px solid green";

        fo.user_phone.value = "";
        fo.user_phone.style.border = "5px solid green";

        fo.user_message.value = "";
        fo.user_message.style.border = "5px solid green";

        document.getElementById('button').value = "Готово!";

        

    }

}