jQuery(function ($) {
	$('#dashboard-label').on({
		mouseenter: function () {
			$('#dashboard-img').attr('src','/assets/images/icons/black/dashboard.png');
		},
		mouseleave: function () {
			$('#dashboard-img').attr('src','/assets/images/icons/white/dashboard.png');
		}
	});

	$('#tutorial-label').on({
		mouseenter: function () {
			$('#tutorial-img').attr('src','/assets/images/icons/black/tutorial.png');
		},
		mouseleave: function () {
			$('#tutorial-img').attr('src','/assets/images/icons/white/tutorial.png');
		}
	});

	$('#profile-label').on({
		mouseenter: function () {
			$('#profile-img').attr('src','/assets/images/icons/black/profile.png');
		},
		mouseleave: function () {
			$('#profile-img').attr('src','/assets/images/icons/white/profile.png');
		}
	});

	$('.sidebar-logout').on({
		mouseenter: function () {
			$('#logout-img').attr('src','/assets/images/icons/black/logout.png');
		},
		mouseleave: function () {
			$('#logout-img').attr('src','/assets/images/icons/white/logout.png');
		}
	});

	$(".navbar-burger").click(function() {
    	$(".navbar-burger").toggleClass("is-active");
    	$(".navbar-menu").toggleClass("is-active");
	});
});