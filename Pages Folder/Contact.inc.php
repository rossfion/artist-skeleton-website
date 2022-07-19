<!-- It is generally taboo in the art world that you would wish to manage your own career. For the purposes of this exercise, the contact from has been kept simple. Otherwise you would simply provide your email address and any other contact details-->
<!-- Option one: your contact details -->
<h1 id="request">Contact Details</h1>
<section>
    <h2>Email Address</h2>
    <p>yourname@domain.com</p>
</section>

<section>
    <h2>Contact Information</h2>
    <p>Studio Name</p>
    <p>Address Line One</p>
    <p>Address Line Two</p>
    <p>Town/City</p>
    <p>State/Province</p>
    <p>Zipcode/Postcode</p>
</section>

<!-- Option two: simple contact form with validations -->
<h1 id="request">Contact Form (Optional)</h1>
<p class="req">Interested in booking me? Please complete and submit the following form.</p>
<?php
// Initialize variables to null.
$NameError = "";
$EmailError = "";

//On Submitting form, the following function will execute
//Submit scope starts here
if(isset($_POST['Submit'])){
    if(empty($_POST["Name"])){
    $NameError = "Name is Required";
    }else{
        $Name = Test_User_Input($_POST["Name"]);

        // check Name only contains letters and whitespace
        if(!preg_match("/^[A-Za-z\. ]*$/", $Name)){
            $NameError = "Only letters and white space are allowed";
        }
    }

    if(empty($_POST["Email"])){
    $EmailError = "Email is required";
    }else{
        $Email = Test_User_Input($_POST["Email"]);

        // check if e-mail address syntax is valid or not
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email))
        {
            $EmailError = "Invalid Email Format";
        }
    }

}

    if(!empty($_POST["Name"])&&!empty($_POST["Email"])){
        if((preg_match("/^[A-Za-z\. ]*$/", $Name)==true)&&(preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $Email)==true))
        {
            $emailTo = "mail@receiveremail.com";
            $subject = "Contact Form";
            $body = " Name : ".$_POST["Name"]."
            Email : ".$_POST["Email"]."
            Message : ".$_POST["Comment"];
            $Sender = "From:mail@senderemail.com";
                if (mail($emailTo, $subject, $body, $Sender)) {
                    echo "<h2>".$_POST['Name'].",  Your message was sent</h2> <br>";
                } else {
                    echo "<h2>".$_POST['Name']." Something Went Wrong :/ Try Again !</h2> <br>";
                }
        
    }else{
        echo '<span class="Error">* Please complete & correct the form then try again*<br><br></span>';
    }
}//Submit scope ends here

//Function to get and throw data to each of the field final variables.
function Test_User_Input($Data){
    return $Data;
}
//php code ends here
?>

<style type="text/css">
    input[type="text"],input[type="email"],textarea{
        border:  1px solid dashed;
        background-color: rgb(221,216,212);
        width: 480px;
        padding: .5em;
        font-size: 1.0em;
    }
    .Error{
        color: red;
        font-size: 1.2em;
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    }
    input[type="submit"]{
        color: white;
        float: right;
        font-size: 1.3em;
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
        width: 170px;
        height: 40px;
        background-color:  #5D0580;
        border: 5px solid ;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        border-top-left-radius: 35px;
        border-top-right-radius: 35px;
        border-color: rgb(221,216,212);
        font-weight: bold;
    }
    .FieldInfo{
        color: rgb(251, 174, 44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1.3em;


    }
    .MF{
        color: black;
        font-size: 1.2em;
        font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    }

</style>

<?php ?>

<form  action="" method="post"> 
    <legend>* Please fill out the following fields.</legend>			
    <fieldset>
        <span class="FieldInfo">
            Name:</span><br>
        <input class="input" type="text" Name="Name" value="">
        <span class="Error">*<?php echo $NameError; ?></span><br>
        <span class="FieldInfo">
            E-mail:</span><br>
        <input class="input" type="text" Name="Email" value="">
        <span class="Error">*<?php echo $EmailError; ?></span><br>
        
        <span class="FieldInfo">
            Message:</span><br>
        <textarea Name="Comment" rows="5" cols="25"></textarea>
        <br>
        <br>
        <input type="Submit" Name="Submit" value="Submit">
    </fieldset>
</form>
