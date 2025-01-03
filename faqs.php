<?php include 'header.php'; ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/categories/banner.png">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>FAQS</h2>
          <div class="breadcrumb__option">
            <a href="./index.php">Home</a>
            <span>FAQS</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Faqs Section Begin -->
<section class="from-faqs mt-5">
  <div class="container">

    <div class="row" style="justify-content: center;">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false">
              <span class="accordion-title">Why is the moon sometimes out during the day?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                Ut tortor pretium viverra suspendisse potenti.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false">
              <span class="accordion-title">Why is the sky blue?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                Ut tortor pretium viverra suspendisse potenti.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false">
              <span class="accordion-title">Will we ever discover aliens?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                Ut tortor pretium viverra suspendisse potenti.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false">
              <span class="accordion-title">How much does the Earth weigh?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                Ut tortor pretium viverra suspendisse potenti.
              </p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false">
              <span class="accordion-title">How do airplanes stay up?</span>
              <span class="icon" aria-hidden="true"></span>
            </button>
            <div class="accordion-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut.
                Ut tortor pretium viverra suspendisse potenti.
              </p>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- Faqs Section End -->

<?php include 'footer.php'; ?>

<style>
  .accordion .accordion-item {
    border-bottom: 1px solid #e5e5e5;
  }

  .accordion .accordion-item button[aria-expanded='true'] {
    border-bottom: 1px solid white;
  }

  .accordion button {
    position: relative;
    display: block;
    text-align: left;
    width: 100%;
    padding: 1em 19px;
    color: #7288a2;
    font-size: 1.15rem;
    font-weight: 400;
    border: none;
    background: none;
    outline: none;
    height: auto;
  }

  .accordion button:hover,
  .accordion button:focus {
    cursor: pointer;
    color: white;
  }

  .accordion button:hover::after,
  .accordion button:focus::after {
    cursor: pointer;
    color: white;
    border: 1px solid white;
  }

  /* .accordion button .accordion-title {
  padding: 1em 1.5em 1em 0;
} */

  .accordion button .icon {
    display: inline-block;
    position: absolute;
    top: 18px;
    right: 0;
    width: 22px;
    height: 22px;
    border: 1px solid;
    border-radius: 22px;
  }

  .accordion button .icon::before {
    display: block;
    position: absolute;
    content: '';
    top: 9px;
    left: 5px;
    width: 10px;
    height: 2px;
    background: currentColor;
  }

  .accordion button .icon::after {
    display: block;
    position: absolute;
    content: '';
    top: 5px;
    left: 9px;
    width: 2px;
    height: 10px;
    background: currentColor;
  }

  .accordion button[aria-expanded='true'] {
    color: white;
  }

  .accordion button[aria-expanded='true'] .icon::after {
    width: 0;
  }

  .accordion button[aria-expanded='true']+.accordion-content {
    opacity: 1;
    max-height: 9em;
    transition: all 200ms linear;
    will-change: opacity, max-height;
  }

  .accordion .accordion-content {
    opacity: 0;
    max-height: 0;
    overflow: hidden;
    transition: opacity 200ms linear, max-height 200ms linear;
    will-change: opacity, max-height;
  }

  .accordion .accordion-content p {
    font-size: 1rem;
    font-weight: 300;
    margin: 2em 15px;
    color: white;
  }
</style>

<script>
  const items = document.querySelectorAll('.accordion button');

  function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
      this.setAttribute('aria-expanded', 'true');
    }
  }

  items.forEach((item) => item.addEventListener('click', toggleAccordion));
</script>