function sendEmail(sendTo,productName,id) {
  var sendTo  = sendTo;
  var favContent = "Shared from your favourites list. <br><b>"+ productName + "</b><br><a href='http://localhost/hypermarket/index.php/Store/viewItem?ID="+id+"'>Start Shopping Here.</a>";
  console.log(favContent);

  Email.send({
    Host: "smtp.gmail.com",
    Username : "teamhypermarket@gmail.com",
    Password : "Hyper@123",
    To : sendTo,
    From : "teamhypermarket@gmail.com",
    Subject : "HYPERMARKET - Favourites",
    Body : favContent,
    }).then(
      message => toast("Shared to email successfully")
    );
}
