<!DOCTYPE html>
<html>
<head>
    <title>Blog Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/font.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style-dark.css">
    <link rel="stylesheet" href="css/style-gray.css">
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="css/res-menu.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->

</head>
<body class='gray'><!--<div class="alert_w_p_u"></div>-->

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="index.html">
                                    <img src="images/logo.png" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                            <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="coupon.html">Coupons</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="coupon-code.html">Coupons Code</a>
                                        <ul class="sub-menu">
                                            <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                            <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="brand-list.html">Brands</a>
                                        <ul class="sub-menu">
                                            <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                            <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                            <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                            <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                            <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="active"><a href="blog.html">Blog</a></li>
                                    <li>
                                        <a href="my-coupon.html">My coupons</a>
                                        <i class="icon iPickRed lbl-count"><span>12</span></i>
                                    </li>
                                </ul>
                                <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sys_pop_login" class="pop-login">
                <div class="viewport-pop">
                    <div class="transport-viewer clearfix">
                        <div class="mod-register">
                            <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email">
                                            <input class="input-txt" id="sys_email" type="email" placeholder="you@mail.com">
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass" type="password" placeholder="password please!">
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news">
                                            <input id="sys_chk_news" class="input-chk" type="checkbox"> Remember me
                                            <i class="icon iUncheck"></i>
                                            <a class="lost-pass" href="#">Forgot password ?</a>
                                        </label>
                                        <div class="wrap-login-btn">
                                            <button class="btn-flat gr btn-submit-reg" type="submit">Login</button>
                                            <div class="sep-connect">
                                                <span>Or</span>
                                            </div>
                                            <div class="grp-connect">
                                                <a class="btn-flat fb" href="#">Facebook</a>
                                                <a class="btn-flat gg" href="#">Google</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-create-acc">
                                        <img class="account" src="images/reg-account.png" alt="Couponday.com">
                                        <p class="lbl-dung-lo rs">Not a member? Don’t worry</p>
                                        <a id="sys_link_reg_panel" href="register.html" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                        <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                                    </div>
                                </form>
                                <i class="line-sep"></i>
                            </div>
                        </div><!--end: Login panel -->
                        <div class="mod-register">
                            <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                            <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Coupons.com. Enter in an email and a password or sign up with Facebook.</div>
                            <div class="wrap-form-reg clearfix">
                                <form action="#">
                                    <div class="left-form">
                                        <label class="wrap-txt" for="sys_email_reg">
                                            <input class="input-txt" id="sys_email_reg" type="email" placeholder="you@mail.com"/>
                                        </label>
                                        <label class="wrap-txt" for="sys_pass">
                                            <input class="input-txt" id="sys_pass_reg" type="password" placeholder="password please!"/>
                                        </label>
                                        <label class="wrap-check" for="sys_chk_news_reg">
                                            <input id="sys_chk_news_reg" class="input-chk" type="checkbox"/> Send me the weekly Couponday.com’s offers.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                        <label class="wrap-check" for="sys_chk_agree">
                                            <input id="sys_chk_agree" class="input-chk" type="checkbox"/> I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                                            <i class="icon iUncheck"></i>
                                        </label>
                                    </div>
                                    <div class="right-connect">
                                        <button class="btn-flat yellow btn-submit-reg" type="submit">Create an account</button>
                                        <div class="sep-connect">
                                            <span>Or</span>
                                        </div>
                                        <div class="grp-connect">
                                            <p class="rs">Sign up using your account on:</p>
                                            <a class="btn-flat fb" href="#">Facebook</a>
                                            <a class="btn-flat gg" href="#">Google</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <p class="rs wrap-link-back">
                                <a id="sys_link_login_panel" href="login.html" class="link-back">
                                    <i class="pick-r"></i>
                                    Back to login
                                </a>
                            </p>
                        </div><!--end: Register panel -->
                    </div>
                    <div id="sys_paging_state" class="paging-state">
                        <i class="active"></i>
                        <i></i>
                    </div>
                    <i id="sys_close_login_popup" class="icon iClose close-popop"></i>
                </div>
            </div>
        </header><!--end: header.mod-header -->
        <nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="coupon.html">Coupons</a></li>
                    <li class="has-sub">
                        <a href="coupon-code.html">Coupons Code</a>
                        <div class="mp-level">
                            <h2>Coupons Code</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <a href="brand-list.html">Brands</a>
                        <div class="mp-level">
                            <h2>Brands</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="my-coupon.html">My coupons(12)</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </nav><!--end: .mp-menu -->
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Blog</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="layout-2cols pt-hight clearfix">
                    <div class="grid_8 content">
                        <div class="mod-breadcrumb no-pt clearfix">
                            <a href="#">Home</a>
                            <span>&gt;</span>
                            <a href="#">Coupons</a>
                            <span>&gt;</span>
                            <a href="#">Lindt - Save 10% off</a>
                        </div><!--end: .mod-breadcrumb-->
                        <div class="mod-blog-detail">
                            <img class="feature-img" src="images/ex/12-05.jpg" alt="$ARTICLE_TITLE"/>
                            <div class="top-detail clearfix">
                                <div class="left-title">
                                    <a class="blog-title" href="#">Lorem ipsum dolor sit amet consectetuer </a>
                                    <div class="post-by">by <a class="user-post" href="#">Admin</a> in <a class="category" href="#">Coupon Category</a></div>
                                </div>
                                <div class="right-date">
                                    <span class="day">12</span>
                                    <span class="my">May / 2013</span>
                                </div>
                            </div>
                            <div class="blog-full-content">
                                <p>Deum voluntati etiam rhoncus maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam. V signa in lucem exempli. Ingens ad quia ad nomine. Quadragesimae tunc Stet consequat eiusdem ea commotio gaude valde hinc Agimus nolo accipies si. Stet consequat eiusdem ea docentur Hellenicus ut libertatem non solutionem invenerunt.</p>
                                <p>Longa figura haec vidit ad quia ei Taliarchum in modo ad nomine Stranguillio sit aliquip ipsa codicellos pedes Dianae. Casus tui clericis regnat se in modo compungi. Neque revertisset meam celaveritis ac ea complacuit. Palladio in fuerat construeret in fuerat eum filiam vel per te ad per accipere filia dedit est amet coram me. Lycoridem Apollonio dares ipsum rebum accusam amici se sed esse more defuncta ait. Apollonii illi desiderat dolor exposuisset mucrone geminus filium suum in modo ad nomine. Habet anulum in fuerat accidens inquit merui, dolores in lucem exempli paupers coniunx. Statimque assueta cum obiectum dixit eos cui. Carissimi deo adiuves finem imponunt hoc ait mea Christianis aedificatur ergo quod non coepit contingere vasculo ab Archistratis continuo. Jesu Dionysiadem tuos sed eu fugiens laudo misera Tharsia, zurziaca in modo invenit quasi nomen accidentia iuvenis eum. Credo puella sed eu fugiens laudo in. A lenoni incommunicabile in lucem exempli paupers coniunx minus huius. Auri est in deinde plectrum anni ipsa quod una. Flebili Miserere puellam flentem sub dixi die, tharsos princeps coniungitur vestra nutriendam veni. Jesu Dionysiadem patrem dolor invenerit habetur ad per.</p>
                                <p>Christo tunc agitans diam ‘ Mucro enim formam cum magna aliter diligo alii paupertas quantitas non solutionem ascendens sed. Suos faciam atque bona dei. Ipsa mihi cum suam vidit Dionysiadi, toro frumento manu fueris navigare non coepit. Valde agam eam sed haec vidit pater, aliqua abstrahit orare ecce prima inrumpit dic. Ephesiorum illius ergo adseris de his, peractoque convocatis ad suis alteri formam. Invitamus me vero diam ille Tharsos determinatio debitis torporis quin. Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae. Inde valuit argentum in rei exultant deo hanc si quod una. Austri ventriculum defunctae cubiculo forma ait est se sed quod ait! Epheso Tyrum in fuerat construeret cena reges undis Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia. Diana praesentatis ne videret quaeritur, cur meae sit Mariae Bone. Plenus vado est in lucem genero coruscus eum in deinde cupis auras sed haec sed quod non dum autem Apolloni figitur acquievit. Multa famis libet regio hinc ad nomine Maria non coepit.</p>
                            </div>
                            <div class="wrap-tag">
                                <span class="btn btn-gray type-tag tag-lbl">Tag</span>
                                <a class="btn btn-gray type-tag" href="#">Sweet</a>
                                <a class="btn btn-gray type-tag" href="#">Lindor</a>
                                <a class="btn btn-gray type-tag" href="#">Food</a>
                                <a class="btn btn-gray type-tag" href="#">Lindt</a>
                                <a class="btn btn-gray type-tag" href="#">Walmart</a>
                                <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                            </div>
                            <div class="about-author">
                                <div class="flex">
                                    <a class="author-avatar thumb-left" href="#"><img src="images/ex/13-02.jpg" alt="$NAME"/></a>
                                    <div class="flex-body">
                                        <a class="author-name" href="#">JUSTIN ROCKWELL</a>
                                        <p class="rs author-desc">Drivers then grab what food and rest they can before returning to drive another stint. Today it is mandated that three drivers share each competing vehicle. Avatar image is under copyright © David Marvier</p>
                                        <p class="rs author-social">
                                            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                            <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .mod-blog-detail-->
                        <div class="mod-related-posts block clearfix">
                            <h3 class="title-block has-link">
                                Related posts
                                <span class="grp-nav">
                                    <a id="sys_prev_replated_page" class="btn-nav btn-prev" href="#"><i class="icon iPrev"></i></a>
                                    <a id="sys_next_replated_page" class="btn-nav btn-next" href="#"><i class="icon iNext"></i></a>
                                </span>
                            </h3>
                            <div class="block-content">
                                <div id="sys_list_related_post" class="list-related-post clearfix" data-paging="1" data-total-page="3">
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-10.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Christo tunc agitans diam Mucro enim formam cum magna </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-11.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#"> Austri ventriculum defunctae cubiculo forma ait </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-6.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-12.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Tyrum in fuerat co Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-1.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Christo tunc agitans diam Mucro enim formam cum magna </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-2.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#"> Austri ventriculum defunctae cubiculo forma ait </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-3.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-4.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Tyrum in fuerat co Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-5.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Christo tunc agitans diam Mucro enim formam cum magna </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-7.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#"> Austri ventriculum defunctae cubiculo forma ait </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-8.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="images/ex/th-234x234-9.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Tyrum in fuerat co Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                </div>
                            </div>
                        </div>
                        <div class="mod-comment">
                            <div class="block">
                                <h3 class="title-block">2 Comments</h3>
                                <div class="block-content">
                                    <div class="list-comment">
                                        <div class="comment-item">
                                            <div class="flex">
                                                <a class="thumb-left" href="#"><img src="images/ex/th-119x119-1.jpg" alt="$NAME"/></a>
                                                <div class="flex-body">
                                                    <div class="wrap-name">
                                                        <a class="name-commenter" href="#">David Marvier</a>
                                                        <span class="sep"></span>
                                                        <span class="time-post">33 minutes ago</span>
                                                    </div>
                                                    <p class="rs comment-content">Drivers then grab what food and rest they can before returning to drive another stint. Today it is mandated that three drivers share each competing vehicle. Avatar image is under copyright © David Marvier</p>
                                                </div>
                                            </div>
                                        </div><!--end: .comment-item -->
                                        <div class="comment-item">
                                            <div class="flex">
                                                <a class="thumb-left" href="#"><img src="images/ex/th-119x119-2.jpg" alt="$NAME"/></a>
                                                <div class="flex-body">
                                                    <div class="wrap-name">
                                                        <a class="name-commenter" href="#">Chris Coyier</a>
                                                        <span class="sep"></span>
                                                        <span class="time-post">20 minutes ago</span>
                                                    </div>
                                                    <p class="rs comment-content">So what’s the Grunt workflow for “in dev, link up all these scripts individually” and “in prod, combine” ? You’d need to process .html right</p>
                                                </div>
                                            </div>
                                        </div><!--end: .comment-item -->
                                        <div class="comment-item">
                                            <div class="flex">
                                                <a class="thumb-left" href="#"><img src="images/ex/th-119x119-3.jpg" alt="$NAME"/></a>
                                                <div class="flex-body">
                                                    <div class="wrap-name">
                                                        <a class="name-commenter" href="#">Marcy Sutton</a>
                                                        <span class="sep"></span>
                                                        <span class="time-post">1 minute ago</span>
                                                    </div>
                                                    <p class="rs comment-content">I'm not sure how I feel about tweaks being able to access iOS's biometric security features...</p>
                                                </div>
                                            </div>
                                        </div><!--end: .comment-item -->
                                    </div>
                                </div>
                            </div><!--end: block list comment-->
                            <div class="block blk-post-cm">
                                <h3 class="title-block">Leave a comment</h3>
                                <div class="block-content">
                                    <div class="form-post-cm form">
                                        <p class="rs form-desc">Discuss this article. We reserve the right to delete flames, trolls, and wood nymphs.</p>
                                        <div class="clearfix">
                                            <form action="#">
                                                <label class="lbl-wrap-text" for="sys_txt_name">
                                                    <input class="txt-ct" id="sys_txt_name" type="text" placeholder="Name(required)"/>
                                                </label>
                                                <label class="lbl-wrap-text" for="sys_txt_email">
                                                    <input class="txt-ct" id="sys_txt_email" type="text" placeholder="Email(required)"/>
                                                </label>
                                                <label class="lbl-wrap-text" for="sys_txt_site">
                                                    <input class="txt-ct" id="sys_txt_site" type="text" placeholder="Website"/>
                                                </label>
                                                <label class="lbl-wrap-text txt-content" for="sys_txt_sms">
                                                    <textarea class="txt-ct" name="sys_txt_sms" id="sys_txt_sms" cols="30" rows="10" placeholder="Message(required)"></textarea>
                                                </label>
                                                <div class="wrap-submit">
                                                    <button class="btn-submit" type="submit">Post comment</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid_4 sidebar">
                        <div class="mod-search block">
                            <h3 class="title-block">Find your coupon code</h3>
                            <div class="block-content">
                                <label class="lbl-wrap" for="sys_search_coupon_code">
                                    <input class="keyword-search" id="sys_search_coupon_code" type="search" placeholder="Search"/>
                                    <input type="submit" class="btn-search" value="">
                                </label>
                            </div>
                        </div><!--end: .mod-search -->
                        <div class="mod-list-store block">
                            <h3 class="title-block">Popular store</h3>
                            <div class="block-content">
                                <div class="wrap-list-store clearfix">
                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-07.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-12.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-11.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-10.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-09.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="brand-logo" href="#" >
                                        <span class="wrap-logo">
                                            <span class="center-img">
                                                <span class="ver_hold"></span>
                                                <span class="ver_container"><img src="images/ex/04-08.jpg" alt="$BRAND_NAME"></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div><!--end: .mod-list-store -->
                        <div class="mod-simple-coupon block">
                            <h3 class="title-block">Latest coupon</h3>
                            <div class="block-content">
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-14.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-15.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-16.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                            </div>
                        </div><!--end: .mod-simple-coupon -->
                        <div class="mod-ads"><a href="#"><img src="images/ex/04-17.jpg" alt="$NAME"/></a></div>
                        <div class="mod-popular-tag block">
                            <h3 class="title-block">Popular Tag</h3>
                            <div class="block-content">
                                <a class="btn btn-gray type-tag" href="#">Sweet</a>
                                <a class="btn btn-gray type-tag" href="#">Lindor</a>
                                <a class="btn btn-gray type-tag" href="#">Food</a>
                                <a class="btn btn-gray type-tag" href="#">Lindt</a>
                                <a class="btn btn-gray type-tag" href="#">Walmart</a>
                                <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_3">
                            <div class="company-info">
                                <img src="images/logo-gray.png" alt="CouponDay"/>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                                <p class="rs">
                                    1200 Balh Blah Avenue <br />
                                    Hanoi, Vietnam 12137
                                </p>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Follow us</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Our Facebook page</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Tweets</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-pinterest-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Pin board</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                        <div class="grid_3">
                            <div class="block intro-video">
                                <h3 class="title-block">Intro Video</h3>
                                <div class="block-content">
                                     <div class="block-content">
                                        <div class="wrap-video" id="sys_wrap_video">
                                            <div class="lightbox-video">
                                                <a class="html5lightbox" href="http://player.vimeo.com/video/36932496" title=""><i class="btn-play"></i><img src="images/video-img.png" alt=""></a>     
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: Intro Video -->
                        <div class="grid_3">
                            <div class="block blog-recent">
                                <h3 class="title-block">Latest blog</h3>
                                <div class="block-content">
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/ex/04-14.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing eli</a></div>
                                    </div>
                                    <div class="entry-item flex">
                                        <a class="thumb-left" href="#">
                                            <img src="images/ex/04-15.jpg" alt="$TITLE"/>
                                        </a>
                                        <div class="flex-body"><a href="#">Ut wisi enim ad minim veniam, quis nostrud</a></div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: blog-recent -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="#">Home</a>
                            <a href="#">Term of conditions</a>
                            <a href="#">Privacy</a>
                            <a href="#">Support</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="copyright">
                            Copyright © 2014 by CouponDay. Designed by MegaDrupal
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.js"></script>
<script type="text/javascript" src="js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->
</body>
</html>