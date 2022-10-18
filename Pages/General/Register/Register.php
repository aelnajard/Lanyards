
  <style media="screen">
    .bgRegister{
      display: none;
      position: fixed;
      top: 0%;
      left: 0px;
      height: 100vh;
      width: 100vw;
      background-color: rgba(10,10,10,.82);
      z-index: 11;
    }
    .containerRegister{
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      min-height: 400px;
      min-width: 300px;
      height: 480px;
      width: 400px;
      border-radius: 5px;
    }
    .headRegister{
      position: relative;
      height: 80px;
      width: 100%;
      background: rgba(69,79,177,0.9);
    }
    .headRegister h3{
      position: relative;
      font-size: 1.7em;
      text-align: center;
      top: 50%;
      transform: translateY(-50%);
      color: white;
    }
    .headRegister h2{
      position: absolute;
      display: block;
      top: 50%;
      transform: translateY(-50%);
      right: 20px;
      color: white;
      font-size: 1.4em;
      cursor: pointer;
      z-index: 2;
    }
    .bodyRegister{
      position: relative;
      height: calc(100% - 80px);
      width: 100%;
      background-color: #e0e0e0;
    }
    .inputRegister{
      position: relative;
      width: 80%;
      padding: 10px 0px;
      top: 35%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    .inputRegister input{
      position: relative;
      width: 100%;
      height: 30px;
      margin: 10px 0;
      border: 1px solid black;
      padding-left: 10px;
      font-size: 1.2em;
    }
    .inputRegister label{
      font-size: 1.2em;
    }
    .bodyRegister button{
      position: relative;
      height: 45px;
      width: 50%;
      top: 40px;
      left: 50%;
      transform: translateX( -50%);
      background: rgba(69,79,177,0.9);
      cursor: pointer;
      color: white;
      font-size: 1.3em;
    }
    .bodyRegister a{
      position: relative;
      display: block;
      height: 45px;
      width: 50%;
      top: 40px;
      left: 50%;
      transform: translateX( -50%);
      cursor: pointer;
      color: black;
      margin: 10px  0;
      font-size: 1.3em;
      text-align: center;
    }
    @media screen and (max-width: 470px) {
      .containerRegister{
        width: 290px
      }
    }
  </style>

  <script src="https://kit.fontawesome.com/497e73f6af.js" crossorigin="anonymous"></script>

  <section class="bgRegister">
    <div class="relative">
      <div class="containerRegister">
        <div class="headRegister">
          <h2 id="closeRegister">X</h2>
          <h3>Register</h3>
        </div>
        <div class="bodyRegister">
          <div class="inputRegister">
          <!--  <label for="nameRegister">Name</label>
            <input type="text" id="nameRegister" name="fname">
            <label for="emailRegister">Email</label>
            <input type="text" id="emailRegister" name="femail">
            <label for="passwordRegister">Password</label>
            <input type="text" id="passwordRegister" name="fpass">-->
            <input id="nameRegister" type="text" name="" value="">

        <button id="test" type="button" name="button">Enter nice</button>

          </div>
        <!--  <button id="register" type="button" name="button">Enter</button>
          <a id="openLogin2" ><i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp;Login</a>-->
        </div>
      </div>
    </div>
  </section>




  <script type="text/javascript">


  var closeRegister = document.getElementById("closeRegister");
  var bgRegister = document.getElementsByClassName("bgRegister")[0].style;
  closeRegister.addEventListener("click",function(){
    bgRegister.display = "none";
  });



/*  var openLogin2 = document.getElementById("openLogin2");
  var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
  openLogin2.addEventListener("click",function(){
    bgRegister.display = "none";
    bgLogin.display = "block";
  });*/


/*  var register = document.getElementById("register");

  var nameRegister = document.getElementById("nameRegister").value;
  var emailRegister = document.getElementById("emailRegister").value;
  var passwordRegister = document.getElementById("passwordRegister").value;

  var hola = document.getElementById("nameRegister").value;


  register.addEventListener("click",function(){
    alert(hola  + "ayyyy");

  });*/

  var test = document.getElementById("test");
  var nameRegister = document.getElementById("nameRegister");

    test.addEventListener("click",  function(){
      alert(nameRegister.value);
    })


    //register
  </script>
