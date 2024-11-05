window.addEventListener(
  "load",
  function (event) {
    resizeSignupContainer();
  },
  false
);

window.addEventListener(
  "resize",
  function (event) {
    resizeSignupContainer();
  },
  false
);

function resizeSignupContainer() {
  var vh = vhCheck();
  var signupContainerIdTop = 0;
  var signupContainerIdHeight = 0;
  var topMargin = 90;
  if (document.getElementById("signupContainerId")) {
    signupContainerIdTop = document
      .getElementById("signupContainerId")
      .getBoundingClientRect().top;
    signupContainerIdHeight = document
      .getElementById("signupContainerId")
      .getBoundingClientRect().height;
  }

  console.log(
    "%cTOP: " + signupContainerIdTop,
    "font-weight: bold; background: #360000; color: #ffb9b9"
  );
  console.log(
    "%cHEIGHT: " + signupContainerIdHeight,
    "font-weight: bold; background: #360000; color: #ffb9b9"
  );
  console.log(
    "%cVH HEIGHT: " + vh.vh,
    "font-weight: bold; background: #360000; color: #ffb9b9"
  );
  document.getElementById("fullscreenId").style.height =
    signupContainerIdHeight + "px";

  if (signupContainerIdTop + signupContainerIdHeight + topMargin > vh.vh) {
    document.getElementById("fullscreenId").style.height =
      signupContainerIdTop + signupContainerIdHeight + topMargin + "px";
  } else {
    document.getElementById("fullscreenId").style.height = vh.vh + "px";
  }
}
