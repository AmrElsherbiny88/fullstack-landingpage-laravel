<style>

@-webkit-keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: transparent !important;
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 100%;
  border-radius:15px;
}
.slider::before, .slider::after {
    background: transparent !important;
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 20s linear infinite;
          animation: scroll 20s linear infinite;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 220px;
}
</style>



<div   data-aos="fade-right" class="slider bg-transparent mt-5">
	<div class="slide-track bg-transparent">
	<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		 </a>
		</div>
		
		<div class="slide">
		<a href="/">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
			</a>
		</div>
		
		
		<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		 </a>
		</div>

			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		 </a>
		</div>

		
		<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		 </a>
		</div>

			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		 </a>
		</div>

		<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		 </a>
		</div>


			<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		 </a>
		</div>


		<div class="slide">
		 <a href="/">
		   <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		 </a>
		</div>
	</div>
</div>