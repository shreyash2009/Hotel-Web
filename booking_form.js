//Checks the errors everytime
function clearErrors()
{
    var errors = document.getElementsByClassName('form-error');
    
    for(let item of errors)
    {
        item.innerHTML = "";
    }
}

//Sets error inside id tag
function setError(id, error)
{
    var element = document.getElementById(id);
    element.getElementsByClassName('form-error')[0].innerHTML = error;
}

//Validates the form
function validateForm()
{
    clearErrors();

    var returnval = true;

    var customer_phonenum = document.forms['myForm']['mobile'].value;
    if (customer_phonenum.length != 10)
    {
        setError('mobile', "*Phone Number should be of 10 digits");
        returnval = false;
    }

    var customer_aadhar = document.forms['myForm']['aadhar'].value;
    if (customer_aadhar.length != 12)
    {
        setError('aadhar', "*Aadhar Number should be of 12 digits");
        returnval = false;
    }

    return returnval;
}

