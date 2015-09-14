/**
 * Created by Cesar on 08/09/2015.
 */
$(".anim-slider").animateSlider(
    {
        autoplay: true,
        interval: 5500,
        animations: {
            0: 	//Slide No1
            {
                li: {
                    show: "fadeIn",
                    hide: "fadeOutLeftBig",
                    delayShow: "delay0.5s"
                },
                "#looks": {
                    show: "rotateInUpLeft",
                    delayShow: "delay1s"
                },
                "#amazing": {
                    show: "rotateInUpLeft",
                    delayShow: "delay1-5s"
                },
                "#place": {
                    show: "rotateInUpLeft",
                    delayShow: "delay2s"
                }
            },
            1: //Slide No2
            {
                li: {
                    show: "fadeInLeft",
                    hide: "fadeOutLeftBig",
                    delayShow: "delay0-5s"
                },
                "#img1": {
                    show: "fadeInRight",
                    delayShow: "delay2s"
                },
                "#img2": {
                    show: "fadeInLeft",
                    delayShow: "delay3s"

                },
                "#img3": {
                    show: "fadeInRight",
                    hide: "fadeOutLeftBig",
                    delayShow: "delay4s"
                }
            },
            2: {
                li: {
                    show: "fadeInUp",
                    hide: "fadeOutDownBig",
                    delayShow: "delay0-5s"
                },
                "#T": {
                    show: "slideInLeft",
                    delayShow: "delay1-5s"
                },
                "#r": {
                    show: "bounceInRight",
                    delayShow: "delay2s"
                },
                "#y": {
                    show: "fadeInRight",
                    delayShow: "delay2-5s"
                },
                "#i": {
                    show: "rollIn",
                    delayShow: "delay3s"
                },
                "#t": {
                    show: "rollIn",
                    delayShow: "delay3s"
                },
                "#mark": {
                    show: "rotateIn",
                    delayShow: "delay3-5s"
                }
            }
        }
    });