function validatePSW(str)
{
    var input = str.getElementByid("algo");
    var validate = input.value.match(/[\w\[\]`!@#$%\^&*()=:<>+]/);
    if(input.value.lenght == validate.lenght && input.value.lenght>= 8)
    {
        console.log("ok");
    }
    else
    {
        console.log("not ok");
    }
    
}
