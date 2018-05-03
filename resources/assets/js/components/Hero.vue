
<template>
   <section class="hero is-fullheight">

   	<div class="cross-image"></div>
   	<div class="image2"></div>
  <div class="hero-body">
  	
    <div class="container hero-container">
      <h1 class="title is-size-1-desktop is-size-2-tablet is-size-3-mobile has-text-weight-bold">
        BH
      </h1>
      <div class="face-image">
      	<img src="../../images/hero-image.jpg" alt="">
      </div>
      <h2 class="subtitle is-size-2-desktop ">
        Hi, I’m Ben. I like to build web stuff, take a look.
      </h2>
      	
    </div>

  </div>
  <font-awesome-icon icon="arrow-down" class="bounce"/>
</section>
</template>
<style scoped lang="scss">
@import '../../sass/initial-variables.scss';

@keyframes bounce {
	0% {
		transform: translateY(0);
	}
	50% {
		transform: translateY(-15px);
	}
	100% {
		transform: translateY(0);
	}
}

.bounce {
	animation: bounce 1s infinite;
}

.fa-arrow-alt-circle-down {
	font-size: 20px;
}
.hero-container {
	z-index: 15;
	display: flex;
	flex-direction: column;
	text-align: center;
	.title {
		color: $color2;
		font-family: 'Pacifico', cursive;
	}
	.subtitle {
		font-family: 'Ubuntu', sans-serif;
		color: $color2;
		max-width: 800px;
		align-self: center;
	}
}
.svg-inline--fa {
	color: $color2;
	z-index: 999;
	font-size: 1.75rem;
	align-self: center;
}
.image2 {
	background-image: url('../../images/sublime.png');
	background-position: right;
	background-repeat: no-repeat;
	background-size: cover;
	filter: blur(6px);
	position: absolute;
	min-height: 100vh;
	min-width: 100vw;
}
.cross-image {
	position: absolute;
	min-height: 100vh;
	min-width: 100vw;
	background-image: url('../../images/2ae43ea27645bbe9cbb7c1a4262caf63.png');
	background-position: left;
	background-repeat: no-repeat;
	background-size: cover;
	clip-path: polygon(100% 0, 100% 100%, 0% 100%, 0 100%);
	filter: blur(6px);
	z-index: 10;
}
.face-image {
	img {
		height: auto;
		width: 300px;
		border: 0.5rem solid $color1;
		border-radius: 500px;
	}

	align-self: center;

	margin: 130px 0;
}
@media only screen and (max-width: $fullhd) {
	.hero-container {
		.title {
		}
		.subtitle {
		}
		.face-image {
			margin: 40px 0;
		}
	}
}
</style>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import { faArrowDown } from '@fortawesome/fontawesome-free-solid';
export default {
	mounted() {
		console.log('Component mounted.');
	},
	components: {
		FontAwesomeIcon
	}
};
</script>
