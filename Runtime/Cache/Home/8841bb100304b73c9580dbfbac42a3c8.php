<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">  
.flyout-wrap {
  position:fixed;
  left:10px;
  bottom:10px;
  height: 191px;
}
.flyout-wrap .flyout {
  position: relative;
  margin: 0 0 1px 6px;
  line-height: 0;
}
.flyout-wrap .flyout > li {
  position: absolute;
  display: block;
  height: 170px;
  background: yellow;
  transform-origin: 12.5px bottom;
}
.flyout-wrap .flyout > li img{ display:block; margin:5px; width:16px; height:16px;}
.flyout-wrap .flyout > li:nth-of-type( 1) {
  transform: rotate(0deg);
}
.flyout-wrap .flyout > li:nth-of-type( 2) {
  transform: rotate(18deg);
}
.flyout-wrap .flyout > li:nth-of-type( 3) {
  transform: rotate(36deg);
}
.flyout-wrap .flyout > li:nth-of-type( 4) {
  transform: rotate(54deg);
}
.flyout-wrap .flyout > li:nth-of-type( 5) {
  transform: rotate(72deg);
}
.flyout-wrap .flyout > li:nth-of-type( 6) {
  transform: rotate(90deg);
}
.flyout-wrap .flyout > li a {
  position: absolute;
  display: block;
  width: 26px;
  height: 26px;
  overflow: hidden;
  text-indent: -99999px;
  background: #444;
  border: 3px solid #fff;
  border-radius: 50%;
  box-shadow: rgba(0, 0, 0, 0.4) 0 0 5px 0, rgba(0, 0, 0, 0.2) 0 0 0 1px, inset rgba(0, 0, 0, 0.5) 0 0 2px 0;
}
.flyout-wrap .flyout > li a:active {
  background: #000;
  border-color: #555;
}
.flyout-wrap .flyout > li a:active span {
  opacity: .3;
}
.flyout-wrap .flyout > li a span {
  display: block;
  width: 26px;
  height: 26px;
  background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='16px' height='16px'><path fill='#fff' d='M11.045,9.879l1.906,6.114l-4.949-3.791L3.059,16l1.9-6.117L0,6.114l6.123,0.013L7.998,0l1.879,6.12L16,6.104L11.045,9.879z'/></svg>") no-repeat center center;
  background-size: 16px 16px;
}
.flyout-wrap .flyout-init li {
  display: none;
}
.flyout-wrap .flyout li a {
  top: 150px;
  animation: contract 0.35s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li a {
  top: 10px;
  animation: expand .6s ease 1 backwards;
}
.flyout-wrap .flyout.fade li a.clicked {
  top: 10px;
  animation: clicked 0.5s ease-out 1 forwards;
}
.flyout-wrap .flyout.fade li a:not(.clicked) {
  top: 10px;
  animation: fade 0.5s ease-out 1 forwards;
}
.flyout-wrap .flyout.fade li a:not(.clicked) span {
  opacity: .1;
  transition: opacity .5s ease;
}
.flyout-wrap .flyout li:nth-of-type( 1) a {
  animation-delay: 0.2s;
}
.flyout-wrap .flyout li:nth-of-type( 1) a:not(.clicked) span {
  animation: spin1-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 1) a {
  animation-delay: 0s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 1) a span {
  transform: rotate(0deg);
  animation: spin1-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 1) a.clicked span {
  transform: rotate(0deg);
}
.flyout-wrap .flyout li:nth-of-type( 2) a {
  animation-delay: 0.16s;
}
.flyout-wrap .flyout li:nth-of-type( 2) a:not(.clicked) span {
  animation: spin2-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 2) a {
  animation-delay: 0.04s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 2) a span {
  transform: rotate(-18deg);
  animation: spin2-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 2) a.clicked span {
  transform: rotate(-18deg);
}
.flyout-wrap .flyout li:nth-of-type( 3) a {
  animation-delay: 0.12s;
}
.flyout-wrap .flyout li:nth-of-type( 3) a:not(.clicked) span {
  animation: spin3-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 3) a {
  animation-delay: 0.08s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 3) a span {
  transform: rotate(-36deg);
  animation: spin3-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 3) a.clicked span {
  transform: rotate(-36deg);
}
.flyout-wrap .flyout li:nth-of-type( 4) a {
  animation-delay: 0.08s;
}
.flyout-wrap .flyout li:nth-of-type( 4) a:not(.clicked) span {
  animation: spin4-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 4) a {
  animation-delay: 0.12s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 4) a span {
  transform: rotate(-54deg);
  animation: spin4-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 4) a.clicked span {
  transform: rotate(-54deg);
}
.flyout-wrap .flyout li:nth-of-type( 5) a {
  animation-delay: 0.04s;
}
.flyout-wrap .flyout li:nth-of-type( 5) a:not(.clicked) span {
  animation: spin5-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 5) a {
  animation-delay: 0.16s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 5) a span {
  transform: rotate(-72deg);
  animation: spin5-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 5) a.clicked span {
  transform: rotate(-72deg);
}
.flyout-wrap .flyout li:nth-of-type( 6) a {
  animation-delay: 0s;
}
.flyout-wrap .flyout li:nth-of-type( 6) a:not(.clicked) span {
  animation: spin6-contract .9s ease-out 1 backwards;
}
.flyout-wrap .flyout.expand li:nth-of-type( 6) a {
  animation-delay: 0.2s;
}
.flyout-wrap .flyout.expand li:nth-of-type( 6) a span {
  transform: rotate(-90deg);
  animation: spin6-expand .6s ease-out 1 backwards;
}
.flyout-wrap .flyout.fade li:nth-of-type( 6) a.clicked span {
  transform: rotate(-90deg);
}
.flyout-wrap .flyout-btn {
  position: absolute;
  bottom: 0;
  left: 0;
  z-index: 9999;
  width: 36px;
  height: 36px;
  overflow: hidden;
  text-indent: -99999px;
  background: #f76f54;
  background: linear-gradient(top, #f76f54 0, #dd3535 49%, #d32121 51%, #c61f1f 100%);
  border: 4px solid #fff;
  border-radius: 50%;
  outline: none;
  box-shadow: rgba(0, 0, 0, 0.3) 0 3px 8px 0, rgba(0, 0, 0, 0.2) 0 0 0 1px, inset rgba(0, 0, 0, 0.3) 0 0 0 1px, inset rgba(255, 255, 255, 0.3) 0 1px 0 1px;
}
.flyout-wrap .flyout-btn span {
  display: block;
  width: 36px;
  height: 36px;
  background: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='20px' height='20px'><g><path fill='#fff' d='M20,11.402c0,0.453-0.367,0.82-0.822,0.82H0.82c-0.453,0-0.82-0.367-0.82-0.82V8.598 c0-0.454,0.367-0.821,0.82-0.821h18.357C19.633,7.776,20,8.144,20,8.598V11.402z'/><path fill='#fff' d='M8.598,20c-0.453,0-0.821-0.367-0.821-0.82V0.821c0-0.452,0.368-0.82,0.821-0.82h2.804 c0.453,0,0.82,0.368,0.82,0.82V19.18c0,0.453-0.367,0.82-0.82,0.82H8.598z'/></g></svg>") no-repeat center center;
  transition: transform .4s ease;
}
.flyout-wrap .flyout-btn.btn-rotate span {
  transform: rotate(-135deg);
}
.flyout-wrap .ani-expand 0% {
  top: 150px;
}
.flyout-wrap .ani-expand 50% {
  top: -10px;
}
.flyout-wrap .ani-expand 70% {
  top: 15px;
}
.flyout-wrap .ani-expand 100% {
  top: 10px;
}
.flyout-wrap .ani-contract 0% {
  top: 10px;
}
.flyout-wrap .ani-contract 40% {
  top: -25px;
}
.flyout-wrap .ani-contract 100% {
  top: 150px;
}
.flyout-wrap .ani-clicked 0% {
  opacity: 1;
  transform: scale(1);
}
.flyout-wrap .ani-clicked 100% {
  opacity: 0;
  transform: scale(5);
}
@keyframes expand {
  0% {
    top: 150px;
  }
  50% {
    top: -10px;
  }
  70% {
    top: 15px;
  }
  100% {
    top: 10px;
  }
}
@keyframes contract {
  0% {
    top: 10px;
  }
  40% {
    top: -25px;
  }
  100% {

    top: 150px;
  }
}
@keyframes clicked {
  0% {
    transform: scale(1);
    opacity: 1;
    top: 10px;
  }
  90% {
    top: 10px;
  }
  99% {
    transform: scale(6);
    opacity: 0;
    top: 150px;
  }
  100% {
    transform: scale(0);
  }
}
@keyframes fade {
  0% {
    transform: scale(1);
    opacity: 1;
    top: 10px;
  }
  90% {
    opacity: 0;
    top: 10px;
  }
  99% {
    transform: scale(0);
    top: 150px;
  }
  100% {
    transform: scale(0);
  }
}
.flyout-wrap .ani-spin1-expand 0% {
  transform: rotate(0deg);
}
.flyout-wrap .ani-spin1-expand 60% {
  transform: rotate(-360deg);
}
.flyout-wrap .ani-spin1-expand 100% {
  transform: rotate(-360deg);
}
.flyout-wrap .ani-spin2-expand 0% {
  transform: rotate(-18deg);
}
.flyout-wrap .ani-spin2-expand 60% {
  transform: rotate(-378deg);
}
.flyout-wrap .ani-spin2-expand 100% {
  transform: rotate(-378deg);
}
.flyout-wrap .ani-spin3-expand 0% {
  transform: rotate(-36deg);
}
.flyout-wrap .ani-spin3-expand 60% {
  transform: rotate(-396deg);
}
.flyout-wrap .ani-spin3-expand 100% {
  transform: rotate(-396deg);
}
.flyout-wrap .ani-spin4-expand 0% {
  transform: rotate(-54deg);
}
.flyout-wrap .ani-spin4-expand 60% {
  transform: rotate(-414deg);
}
.flyout-wrap .ani-spin4-expand 100% {
  transform: rotate(-414deg);
}
.flyout-wrap .ani-spin5-expand 0% {
  transform: rotate(-72deg);
}
.flyout-wrap .ani-spin5-expand 60% {
  transform: rotate(-432deg);
}
.flyout-wrap .ani-spin5-expand 100% {
  transform: rotate(-432deg);
}
.flyout-wrap .ani-spin6-expand 0% {
  transform: rotate(-90deg);
}
.flyout-wrap .ani-spin6-expand 60% {
  transform: rotate(-450deg);
}
.flyout-wrap .ani-spin6-expand 100% {
  transform: rotate(-450deg);
}
.flyout-wrap .ani-spin1-contract 0% {
  transform: rotate(0deg);
}
.flyout-wrap .ani-spin1-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin1-contract 100% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin2-contract 0% {
  transform: rotate(-18deg);
}
.flyout-wrap .ani-spin2-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin2-contract 100% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin3-contract 0% {
  transform: rotate(-36deg);
}
.flyout-wrap .ani-spin3-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin3-contract 100% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin4-contract 0% {
  transform: rotate(-54deg);
}
.flyout-wrap .ani-spin4-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin4-contract 100% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin5-contract 0% {
  transform: rotate(-72deg);
}
.flyout-wrap .ani-spin5-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin5-contract 100% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin6-contract 0% {
  transform: rotate(-90deg);
}
.flyout-wrap .ani-spin6-contract 50% {
  transform: rotate(360deg);
}
.flyout-wrap .ani-spin6-contract 100% {
  transform: rotate(360deg);
}
@keyframes spin1-expand {
  0% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(-360deg);
  }
  100% {
    transform: rotate(-360deg);
  }
}
@keyframes spin2-expand {
  0% {
    transform: rotate(-18deg);
  }
  60% {
    transform: rotate(-378deg);
  }
  100% {
    transform: rotate(-378deg);
  }
}
@keyframes spin3-expand {
  0% {
    transform: rotate(-36deg);
  }
  60% {
    transform: rotate(-396deg);
  }
  100% {
    transform: rotate(-396deg);
  }
}
@keyframes spin4-expand {
  0% {
    transform: rotate(-54deg);
  }
  60% {
    transform: rotate(-414deg);
  }
  100% {
    transform: rotate(-414deg);
  }
}
@keyframes spin5-expand {
  0% {
    transform: rotate(-72deg);
  }
  60% {
    transform: rotate(-432deg);
  }
  100% {
    transform: rotate(-432deg);
  }
}
@keyframes spin6-expand {
  0% {
    transform: rotate(-90deg);
  }
  60% {
    transform: rotate(-450deg);
  }
  100% {
    transform: rotate(-450deg);
  }
}
@keyframes spin1-contract {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin2-contract {
  0% {
    transform: rotate(-18deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin3-contract {
  0% {
    transform: rotate(-36deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin4-contract {
  0% {
    transform: rotate(-54deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin5-contract {
  0% {
    transform: rotate(-72deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes spin6-contract {
  0% {
    transform: rotate(-90deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
<script src="<?php echo CUSTOM_TEMPLATE_PATH;?>Footer/PopV1/index.js"></script>
<?php if(!empty($footer)): ?><div class="flyout-wrap">
<a class="flyout-btn" href="javascript:;" title="Toggle"><span></span></a>
<ul class="flyout flyout-init">
    <?php if(is_array($footer)): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["icon"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul><!-- .flyout -->
</div><!-- .flyout-wrap --><?php endif; ?>