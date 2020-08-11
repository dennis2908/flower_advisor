<style>
.container {
  position: relative;
  width: 1024px;
  font-family: 'Acme';
  margin: 0 auto;
  border: 15px solid #dbd2d2;
  height:750px;
  border-bottom-style: none;
}

.container .img {
  width: 1024px;
  position:center;
  height: auto;
  display: block;
}

.container .logo {
  width: 22%;
  margin:0 auto;
  display: block;
  position: relative;
  color: black;
  padding: 6px 3px;
  border: none;
  cursor: pointer;
}

.container .app {
  width: 9%;
  height: auto;
  display: block;
  position: absolute;
  top:24%;
  left:88%;
  color: black;
  padding: 6px 3px;
  border: none;
  cursor: pointer;
  text-align:center;
}

.container .btn {
  position: absolute;
  top:23%;
  right:57%;
  background-color: white;
  color: black;
  padding: 9px 9px;
  border: none;
  cursor: pointer;
  font-size:14px;
  text-align:center;
  width: 178px;
}

.container .btn_orange {
  background-color: #ee6420;
  color: white;
  padding: 15px 2px;
  border: none;
  cursor: pointer;
  border-radius: 0.2px;
  font-size:14px;
  word-wrap: break-word;
  width: 150px;
  line-height: 25px;
  margin-top:20px;
}

.container .btn:hover {
  background-color: black;
  margin: auto;
}

.dash{
  border: 2px solid red;
  padding: 5px;
  margin-left:-5px;
  margin-right:-5px;
  border-radius: 0 0 0px 20px;
  border-color: transparent transparent grey transparent;
  border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;

}

.dash::before{
  border-radius: 0 0 0px 0px;

}

.div-table {
 display: table;         
 margin: auto;
 width: auto;
 color : #8f6193;
  
}
.div-table-row {
  list-style-position: inside
  list-style: none;
  display: table-row;
  clear: both;
}
.div-table-col1 {
  list-style-position: inside
  list-style: none;
  float: left;
  display: table-column;         
  width: 15px;         
  margin-bottom:5px;
}
.div-table-col2 {
  list-style-position: inside
  list-style: none;
  float: left;
  display: table-column;         
  width: 550px;  
  margin-bottom:8px;  
}

</style>
<link rel="icon" href="{{asset('image/logo.jpg')}}" type="image/icon type">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme|Source+Sans+Pro:300,400,700">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<div class="container">
  <img src="{{asset('image/img.png')}}" class="img" alt="Snow">
  <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232807"><img src="{{asset('image/app.png')}}" class="app" alt="Snow"></a>
  <button class="btn" onclick="copy()">CODE : <b>HALLOW10 <i class="fas fa-copy"></i></b></button>
  <div style="color:purple;margin-left: auto;margin-right: auto;display: block;">
	  <h1 style="text-align:center">Terms and Conditions</h1>
	   <div class="div-table">
            <div class="div-table-row">
                  <div class="div-table-col1">1.</div>
				  <div class="div-table-col2">Promotion ends on October 31, 2017</div>
            </div>
			<div class="div-table-row">
                  <div class="div-table-col1">2. </div>
				  <div class="div-table-col2">Item will be discounted after Discount Code is applied. Discount Code:<b style="color:black">HALLOW10</b></div>
            </div>
			<div class="div-table-row">
                  <div class="div-table-col1">3. </div>
				  <div class="div-table-col2">Not applicable for add-on item, deliver charges, and special discounted product</div>
            </div>
			<div class="div-table-row">
                  <div class="div-table-col1">4. </div>
				  <div class="div-table-col2">Not valid in conjuction with any promotion,offers,dicounts,vouchers</div>
            </div>
			<div class="div-table-row">
                  <div class="div-table-col1">5. </div>
				  <div class="div-table-col2">Management reserves the rights to amend the terms and conditions without prior notice</div>
            </div>

      </div>
	  <div style="text-align:center">
	  <a href="https://www.floweradvisor.com.ph/flowers-philippines"><button class="btn_orange"><b>MAKE SOMEONE'S DAY</b></button></a>
	  </div>
	  <div class="dash"></div>
	  <a href="https://www.floweradvisor.com.ph"><img src="{{asset('image/logo.jpg')}}" class="logo" alt="Snow"></a>
	  <div style="margin-left:25px;margin-right:25px;font-size:15px">Some of you living in Singapore might be difficult to find the most trusted flower delivery Singapore that will help you to give surprise for your love. It is because there are so many flower delivery services that offer you with a wide variety of flower in different kinds, arrangements and prices. This becomes the major reasons why most of Singaporeans get deceived by some irresponsible online flower delivery for the sake of the low quality of flowers and many more.</div>
	  <hr>
  </div>
  <script>
  function copy() {
	   navigator.clipboard.writeText( "HALLOW10");
  } 
  </script>