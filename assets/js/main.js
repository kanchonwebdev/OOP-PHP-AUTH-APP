
/* ---------------
NAV OVERLAY MOTION
----------------*/
var motionText = gsap.timeline({ paused: true });

motionText.to(".overlay-text .text-block .text span", {
    y: "0%",
    duration: 1,
    stagger: 0.08,
});


motionText.to(".overlay-text", {
    y: "-100%",
    duration: 1.5,
    zIndex: "-1"
});

motionText.from(".login-container .left-col", {
    x: "-100%",
    duration: 0.5
});

motionText.from(".login-container .right-col", {
    x: "100%",
    duration: 0.5
});

motionText.from(".login-container .left-col .title-block .line", {
    "width": "0%",
    duration: 0.4
});

motionText.from(".login-container .left-col .title-block .title", {
    y: "100%",
    duration: 0.5
});


motionText.from(".login-container .left-col .text", {
    opacity: 0,
    duration: 0.5
});

motionText.from(".login-container .right-col .title-block .title", {
    y: "100%",
    duration: 0.4
});

motionText.from(".login-container .right-col .top-field .input-block", {
    y: "100%",
    opacity: 0,
    stagger: 0.05,
    duration: 0.4
});

motionText.from(".login-container .right-col .middle-field .line-one", {
    "height": "0px",
    duration: 0.4
});

motionText.from(".login-container .right-col .middle-field .text", {
    y: "100%",
    opacity: 0,
    duration: 0.4
});

motionText.from(".login-container .right-col .middle-field .line-two", {
    "height": "0px",
    duration: 0.4
});

motionText.from(".login-container .right-col .bottom-field .btn-block .btn", {
    y: "100%",
    opacity: 0,
    stagger: 0.05,
    duration: 0.4
});

motionText.play();

