<style>
.wrap {
  position: relative;
  overflow: hidden;
  width: 70%;
  margin: 0 auto;
  background-color:#fff;
}
.wrap img {
  width: 100%;
  height: auto;
  display: block;
}
.wrap:before, .wrap:after {
  content:'';
  position: absolute;
  bottom: 0;
  width: 50%;
  background-color: inherit;
  padding-bottom:3%;
}
.wrap:before {
  right: 50%;
  -ms-transform-origin: 100% 100%;
  -webkit-transform-origin: 100% 100%;
  transform-origin: 100% 100%;
  -ms-transform: skewX(45deg);
  -webkit-transform: skewX(45deg);
  transform: skewX(60deg);
}
.wrap:after {
  left: 50%;
  -ms-transform-origin: 0 100%;
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;
  -ms-transform: skewX(-45deg);
  -webkit-transform: skewX(-45deg);
  transform: skewX(-60deg);
}

</style>

<div class="wrap">
    <img src="img/news/47ecf667a7bacabff493f860ab26adc9.jpg" />
</div>