<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>We provide the Car insurance for the super cars as well as ordinary cars.It is our responsibilities for serving the customer.We take our Customers as our first priorities.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card" style="background-color: white; border-radius: 20px;"">
      <img src="tarun.jpeg" alt="TonyStark" align="margin-left" width="400" height="400">
      <div class="container">
        <h2>Tarun Kumar Arcot</h2>
        <p class="title">CEO & Founder</p>
        <p>How do you buy car insurance? Ask Mr. Tarun as a CEO is a top firm in Car Insurance Management. They grew at a record pace and increased the busines of insurance in the market over 10% .</p>
        <p>tarun@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color: white; border-radius: 20px;">
      <img src="ud.jpeg" align="margin-left"  alt="Pepper" width="400" height="400">
      <div class="container">
        <h2>Utsav Das</h2>
        <p class="title">COO</p>
        <p>He is the Chief Operating Officer of the company and she is the .He has lead the company to a very great heights.He is responsible for internal affairs and helps the human resource manager.</p>
        <p>ud@gmail.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color: white; border-radius: 20px;"">
      <img src="samarth.jpg" align="margin-left"  alt="Happy" width="400" height="400">
      <div class="container">
        <h2>Samarth </h2>
        <p class="title">CTO</p>
        <p>He is  chief technology officer (CTO) who is an executive who is responsible for the management of an organization's research and development (R&D) as well as its technological needs. </p>
        <p>samarth@gmail.com</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
