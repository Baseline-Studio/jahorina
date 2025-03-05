
import LazyLoader from './_site/lazy-load';
import Navigation from './_site/navigation';
import Header from './_site/header';
// import StickyHeader from './_site/sticky-header';
import Sliders from './_site/sliders';
import BigSlider from './_site/big-slider';
import BigMap from './_site/big-map';
import ApartmentsFields from './_site/apartments-fields';
import Gallery from './_site/gallery';
import Accordion from './_site/accordion';
import Animation from './_site/animation';
import Logo from './_site/logo';
import Test from './_site/test';
import SiteMain from './_site/site-main';
import Preloader from './_site/preloader';
import Lottie from './_site/lottie';
// import IntroSwiper from './_site/introSwiper';

document.addEventListener('DOMContentLoaded', () => {
	LazyLoader.init();
	Navigation.init();
	// StickyHeader.init();
	Sliders.init();
	Header.init();
	BigSlider.init();
	BigMap.init();
	ApartmentsFields.init();
	Gallery.init();
	Accordion.init();
	// IntroSwiper.init();
	Animation.init();
	Logo.init();
	Test.init();
	SiteMain.init();
	Preloader.init();
	Lottie.init();
});
