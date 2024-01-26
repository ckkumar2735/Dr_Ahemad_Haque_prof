// =============== Erase error messages =============
function onChangeInput(type) {
  if (type === "name") {
    document.getElementById("nameError").innerText = "";
  }
  if (type === "consulting") {
    document.getElementById("consultingError").innerText = "";
  }
  if (type === "contact") {
    document.getElementById("contactError").innerText = "";
  }
  if (type === "email") {
    document.getElementById("emailError").innerText = "";
  }
  if (type === "address") {
    document.getElementById("addressError").innerText = "";
  }
  if (type === "country") {
    document.getElementById("countryError").innerText = "";
  }
}
// ============== Form Validation Function and show error =============
function formValidate(name, country, address, email, contact, consulting) {
  let check = true;
  const FullName = /^[A-Za-z. ]{3,30}$/;
  const emailValidator =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

  if (name.length === 0) {
    check = false;
    document.getElementById("nameError").innerHTML = "Please enter your name.";
  } else if (name.length < 3) {
    check = false;
    document.getElementById("nameError").innerHTML =
      "Please enter your correct name.";
  } else if (!FullName.test(name)) {
    check = false;
    document.getElementById("nameError").innerHTML =
      "Remove special character.";
  }
  if (consulting.length === 0) {
    check = false;
    document.getElementById("consultingError").innerHTML =
      "Please select type of consultation.";
  }
  if (contact.length === 0) {
    check = false;
    document.getElementById("contactError").innerHTML =
      "Please enter your contact number.";
  } else if (contact.length > 14 || contact.length < 10) {
    check = false;
    console.log("con");
    document.getElementById("contactError").innerHTML =
      "Please enter your correct number.";
  }
  if (email.length === 0) {
    check = false;
    document.getElementById("emailError").innerHTML =
      "Please enter your email.";
  } else if (!emailValidator.test(email)) {
    check = false;
    document.getElementById("emailError").innerHTML =
      "Please enter correct email.";
  }
  if (address.length === 0) {
    check = false;
    document.getElementById("addressError").innerHTML =
      "Please enter your address.";
  }
  if (country.length === 0) {
    check = false;
    document.getElementById("countryError").innerHTML =
      "Please select your country.";
  }

  return check;
}
// ====================== Send Mail ================================

function sendmail(event) {
  event.preventDefault();
  let name = event.target.name.value;
  let consulting = event.target.consulting.value;
  let contact = event.target.contact.value;
  let email = event.target.email.value;
  let address = event.target.address.value;
  let country = event.target.country.value;

  if (formValidate(name, country, address, email, contact, consulting)) {
    document.getElementsByClassName("buffer-m")[0].style.display = "flex";
    let formdata = new FormData(event.target);
    fetch("smtp/send-enquiry-mail.php", {
      method: "POST",
      body: formdata,
    })
      .then((data) => data.text())
      .then(async (response) => {
        console.log(response);
        document.getElementsByClassName("buffer-m")[0].style.display = "none";
        if (response === "Message could not be sent") {
          await swal({
            title: "Not Sent!!",
            text: "Failed message sent!!",
            icon: "error",
            button: "Ok",
            timer: 3000,
          });
        } else if (response === "sent") {
          await swal({
            title: "Sent!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 3000,
          });
          // window.location.href = window.location.origin + "/ahmedhaque";
        }
      })
      .catch(async (error) => {
        document.getElementsByClassName("buffer-m")[0].style.display = "none";
        alert(error);
        await swal({
          title: "Not Sent!!",
          text: "Failed message sent!!",
          icon: "error",
          button: "Ok",
          timer: 3000,
        });
      });
  }
}
