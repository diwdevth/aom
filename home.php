<?php
@session_save_path("tmp/");
@session_start();

if(!isset($_SESSION['status'])){
    header("location: index.php");
    exit();
}else
{

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Manage</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      height: 100%;
      }
      body, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 32px;
      }
      h3 {
      color: #1c87c9;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background: url("images/e7a97bd9b2d25886cc7b9115de83b6b28b73b90b.jpeg") no-repeat center;
      background-size: cover;
      }
      form {
      width: 80%; 
      padding: 25px;
      margin-bottom: 20px;
      background: rgba(0, 0, 0, 0.9);
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option {
      background: black; 
      border: none;
      }
      .metod {
      display: flex; 
      }
      .metodcmd {
        display: flex;
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: -1px;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 5px;
      border-bottom: 3px solid #1c87c9;
      border-left: 3px solid #1c87c9;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #095484;
      }
      .logout {
      display: block;
      width: 100px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      text-align: center;
      }
      .logout:hover {
      background: #095484;
      }
      @media (min-width: 568px) {
      .info {
      flex-flow: row wrap;
      justify-content: space-between;
      }
      input {
      width: 46%;
      }
      input.fname {
      width: 50%;
      }
      select {
      width: 48%;
      }
      }
      
    </style>
  </head>
  <body>
    <div class="main-block">
    <div><a href="logout.php" class="logout">Logout</a></div>
      <h1>Manage</h1>
      <form>
        <div class="info">
          <input class="fname" type="text" id="name" name="name" placeholder="Command: dir | tasklist">
          <select id="numbers">
            <option value="number" disabled selected>Number of time</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
            <option value="35">35</option>
            <option value="40">40</option>
            <option value="45">45</option>
            <option value="50">50</option>
            <option value="55">55</option>
            <option value="60">60</option>
          </select>
          <!--<select>
            <option value="time" disabled selected>Pick up time</option>
            <option value="8">8:00am</option>
            <option value="9">9:00am</option>
            <option value="10">10:00am</option>
            <option value="12">12:00pm</option>
            <option value="1">1:00pm</option>
            <option value="3">3:00pm</option>
            <option value="6">6:00pm</option>
            <option value="7">7:00pm</option>
          </select>-->
        </div>
        <h3>Use Command</h3>
        <div class="metodcmds">
          <div>
            <input type="checkbox" value="cmd" id="usecmd" name="usecmd">
            <label for="usecmd">Use Command</label>
          </div>
        </div>
        <h3>Sleep Now</h3>
        <div class="metods">
          <div>
            <input type="checkbox" value="cmd" id="usesleep" name="usesleep">
            <label for="usesleep">Use Command</label>
          </div>
        </div>
        <div>
            <button type="button" id="send_btn" class="button">Submit</button>
        </div>
        <!--<button type="submit">Submit</button>-->
      </form>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="script.js"></script>
    </div>
  </body>
</html>

<?php
}
?>