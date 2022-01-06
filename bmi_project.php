<!DOCTYPE html>
<html lang="en">
<head>
  <title>BMI Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
      body{
          font-size: 14px;
          font-family: Arial, Helvetica, sans-serif;
          background: #000;
          color: white;
          margin-top: 50px;

      }
     .container{
       background:rgb(180,180,180);
       width: ;
      
     }
     input{
         max-width: 300px;
         max-height: 100px;
     }
     #root_box{
         background:white;
         height: 100px;
        width:152%;
         position: relative;
        margin-bottom:10px ;
        margin-top: 5px;
     }
     .box1{
         max-height: 600px;
         border-radius:45px;
     }
     
     #main_box{
         max-width:620px ;
         background-color: rgb(0,128,0);

     }
     #btn1,#clear{
        margin-top:20px ;
     }
    img{
        overflow: visible;
        position: absolute;
        z-index: 300;
        float:center;
        bottom:250px;
        margin-left: 300px;
        max-height: 450px;
    }
    ul li{
        color:#000;

    }
    #root{
        color:red;
    }
    .header{
        font-weight:bold;
        border: solid white;
        border-radius:45px;
    }
    #gender{
        display:'inline-flexbox';
        position: absolute;
       

       
    }

    .error{
        position:fixed;
        top:50px;
        right:20px;
        pointer-events: none;
        border-radius: 25px;
        transition:1s;
        transform:translateY(-10px);
        z-index: 9999;
        padding: 5px 5px 5px 5px ;
        box-shadow: 0px 0px 2px rgba(0,0,0,0.3);
    }
    .error.errorShow{
        transform:translateY(-10px);
        display: block;
    }   

 
            </style>
</head>
<body>
<div class="container">
  <div id="success" class="error alert-success"></div>
<div id="msg" class="error alert-danger"></div>    
  
    <div class="container" id="main_box">
        <div class="row">
           <div class="bg-primary box1"><h1 class="text-center header">BMI CALCULATOR</h1></div>
              <div class="col-lg-8 col-lg-8" id="left_box">   
                          <form id="addForm">
                                <label for="age">Age : 2 -120</label>
                                <input type="number" id="age" class="form-control" placeholder="Enter your age..">    
                              
                                    <label for="height">Height</label>
                                    <input type="text" id="height" class="form-control" placeholder = "                                                                 m" >  
                                        <label for="weight">Weight</label>
                                            <input type="text" id="weight" class="form-control" placeholder = "                                                                 kg" >   
                                            <!-- result area -->
                                            <h3 class="box-title">Result <i class='fas fa-dumbbell'></i></h3>
                                            <div id="root_box">
                                                <h1 id="root" class="text-center"></h1>
                                                <ul id="details"></ul>
                                                
                                            </div>
                                            <!-- end here -->
                                            <input type="submit" value="Calculate" id="btn1" class="btn btn-primary"> 
                                            <button id="clear" class="btn btn-default">Clear</button> 
                                            <div class="footer">
                                                <small class="inst">Modify values and click Calculate to use</small>
                                            </div>
                                           
                         </form>
                        
                </div>
        </div>
<!-- left panel -->
<div class="col-sm-3">
    <img src="img/bmi2.jpg" id="img">
</div>              

<script>

    const form = document.querySelector('#addForm');
    const inputAge = document.querySelector('#age');
    const inputHeight = document.querySelector('#height');
    const inputWeight = document.querySelector('#weight');
    const result = document.querySelector('#root');
    const det = document.querySelector('#details');
    const cls = document.querySelector('#clear');
    const msg = document.querySelector('#msg');
    

    cls.addEventListener('click', clear);


    form.addEventListener('submit', function(e){
 e.preventDefault();
 // cget the value of the elements
let age = inputAge.value;
let height = inputHeight.value;
let weight = inputWeight.value;

 if(age==='' || height==='' || weight ===''){

       
    msg.classList.add('error');
    msg.innerHTML = 'Please fill all the fields!';
    window.setTimeout(()=>{
        msg.remove('erroShow');}, 3000);


 } else {

 let bmi = '';

 bmi = weight /(height * height);
 console.log(bmi);

// create a new li element
const li = document.createElement('li');
// add class 
li.className = "list-list-item";
// add textnode with the input
li.appendChild(document.createTextNode(
    'User Age is: '+`${age}` + 
    ' Height  :' + `${height}` + ' meter/s' +  
    '  Weight : ' + `${weight}` ));

    det.appendChild(li);
    result.textContent = 'Your BMI is : ' + bmi;

         age = inputAge.value = '';
        height = inputHeight.value = '';
        weight = inputWeight.value = '';
        gender = inputGender.value = '';
   

 
}

    
    });

    function clear(e){
        const li = document.getElementsByTagName('li');
        
        det.textContent = '';
        result.textContent = '';
       


    }

  

</script>
</body>
</html>
