<div id="Modal_Process" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="loading">
        <!-- Make Circle -->
        <div class="spinner"></div>
    </div>
</div>

<style>
#Modal_Process{
	top:50%;
	left:50%;
	height:70px;
	vertical-align:middle;
}
@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
@-webkit-keyframes rotateSpinner{
	0%{
		-webkit-transform:rotate(0deg);
		-moz-transform:rotate(0deg);
		-o-transform:rotate(0deg);
		transform:rotate(0deg);
	}
	100%{
		-webkit-transform:rotate(360deg);
		-moz-transform:rotate(360deg);
		-o-transform:rotate(360deg);
		transform:rotate(360deg);
	}
}
/* Loading animation container */
.loading {
	position:absolute;
    top: 50%;
    left: 50%;
	vertical-align:middle;
    width: 28px;
    height: 28px;
    margin: -14px 0 0 -14px;
}
 
/* Spinner */
.loading .spinner {
    -webkit-animation-delay: 0s;
	-webkit-animation-direction: normal;
	-webkit-animation-duration: 1.2s;
	-webkit-animation-fill-mode: none;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-name: rotateSpinner;
	-webkit-animation-play-state: running;
	-webkit-animation-timing-function: linear;
	background-image: url(img/loading.png);
	color: rgb(51, 51, 51);
	height: 24px;
	width: 24px;
	text-align: center;
	vertical-align:middle;
	
}
</style>