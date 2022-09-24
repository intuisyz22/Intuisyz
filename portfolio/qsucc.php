<div id="qsucc" class="overlay">
 
   <div class="su">
    
     <a class="close" href="#" style="color: black;">×</a>
     <div class="">
       <div class="clearfix">

         <div class="controls">
           <div class="contact-form">
            <h4><img src="https://intuisyz.com/img/tig.png" width="50"> Question Sent Successfully</h4>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<style type="text/css">
 .buttona {
   font-size: 0.8em;
   padding: 5px;
   color: #fff;
   border: 2px solid orange;
   border-radius: 20px/50px;
   text-decoration: none;
   cursor: pointer;
   transition: all 0.3s ease-out;

 }
 .button:hover {
   background: orange;
 }

 .overlay {
   position: absolute;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   background: rgba(0, 0, 0, 0.7);
   transition: opacity 500ms;
   visibility: hidden;
   opacity: 0;
     z-index: 1000;
 }
 .overlay:target {
   visibility: visible;
   opacity: 1;
 }

 .su {
   margin: 320px auto;
   padding: 30px;
   background: #fff;
   border-radius: 0px;
   width: 30%;
   position: relative;
   transition: all 5s ease-in-out;
   border:1px solid #555;
 }
 @media only screen 
 and (max-width : 550px) {

  .su {
   margin: 120px auto;
   padding: 50px;
   background: #fff;
   border-radius: 0px;
   width: 100%;
   position: relative;
   transition: all 5s ease-in-out;
 }
}

.su h2 {
 margin-top: 0;
 color: #333;
 font-family: Tahoma, Arial, sans-serif;
}
.su.close {
 position: absolute;
 top: 20px;
 right: 30px;
 transition: all 200ms;
 font-size: 30px;
 font-weight: bold;
 text-decoration: none;
 color: #333;
}
.su.close:hover {
 color: orange;
}
.su.content {
 max-height: 30%;
 overflow: auto;
}


</style>