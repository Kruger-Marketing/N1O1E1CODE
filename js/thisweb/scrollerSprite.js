/*Scroller Sprite*/
//Anima un sprite de fotos al hacer scroll con el mouse
var viewer = document.querySelector('.viewer'), frame_count  = 9, offset_value = 100;
// init controller
var controller = new ScrollMagic.Controller({
	globalSceneOptions: {
		triggerHook: 0,
		reverse: true
		}
	});
// build pinned scene
new ScrollMagic.Scene({
	triggerElement: '#sticky',
	duration: (frame_count * offset_value) + 'px',
	reverse: true
	})
.setPin('#sticky')
//.addIndicators()
.addTo(controller);
// build step frame scene
for (var i = 1, l = frame_count; i <= l; i++) {
	new ScrollMagic.Scene({
		triggerElement: '#sticky',
		offset: i * offset_value
		})
	.setClassToggle(viewer, 'frame' + i)
	//.addIndicators()
	.addTo(controller);
	}
///	