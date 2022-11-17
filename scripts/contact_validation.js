function validate(doc)
{
    var inputs = [...doc.getElementsByTagName("input")];
    var required = inputs.filter(element => element.hasAttribute("required"));
    var email = document.getElementById("email");
    var phone = document.getElementById("phone");

    
    var result1 = validateRequired(required);
    var result2 = validateEmail(email);
    var result3 = validatePhone(phone);

    var res = result1 && result2 && result3;
    if(res)
    {
        console.log("V pořádku");
    }

    return res;
}

function validateRequired(requiredElements)
{
    var result = requiredElements.some(el => el.value == "");
    if(result)
    {
        console.log("Nejsou vyplněna všechna povinná pole");
    }
    return !result;
}

function validateEmail(email)
{
    const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var result = pattern.test(email.value);
    if(!result)
    {
        console.log("Nesprávný formát e-mailu");
    }
    return result;
}

function validatePhone(phone) 
{
    var regex = /^\+(?:[0-9] ?){6,14}[0-9]$/;
    var result = regex.test(phone.value);
    if (!result) 
    {
        console.log("Nesprávný formát telefonního čísla");
    }
    return result;
}