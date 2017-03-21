<?php
include 'header.php';
 ?>
 <div class="col-12">
   <div class="info-container">
   <h1 class="intro-text">Styleguide</h1>
   <div class="row">
     <div class="col-md-5">
    <h2>Colors</h2>
    <div class="gradient-line"></div>
    <div class="style-sections">
      <div class="color-row flex">
         <div class="color gray-purple"></div>
         <div class="color-info flex column">
           <p>Gray purple</p>
           <p class="light">#806C90</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color medium-purple"></div>
        <div class="color-info flex column">
          <p>Medium purple</p>
          <p class="light">#5A416F</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color dark-purple"></div>
        <div class="color-info flex column">
          <p>Dark purple</p>
          <p class="light">#2E2243</p>
      </div>
      </div>
      <div class="color-row flex">
        <div class="color light-yellow"></div>
        <div class="color-info flex column">
          <p>Light yellow</p>
          <p class="light">#D2B637</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color dark-yellow"></div>
        <div class="color-info flex column">
          <p>Dark yellow</p>
          <p class="light">#BDA019</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color off-white"></div>
        <div class="color-info flex column">
          <p>Off-white</p>
          <p class="light">#F9F8F8</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color sunset-orange"></div>
        <div class="color-info flex column">
          <p>Sunset orange</p>
          <p class="light">#D25834</p>
        </div>
      </div>
      <div class="color-row flex">
        <div class="color dark-orange"></div>
        <div class="color-info flex column">
          <p>Dark orange</p>
          <p class="light">#AD3612</p>
        </div>
      </div>
    </div>
 </div>
 <div class="col-md-6 offset-md-1">
      <h2>Fonts</h2>
      <div class="gradient-line"></div>
   <div class="style-sections">
     <div>
       <h3>Header fonts</h3>
       <h5>Lato 300. This is a header in Lato 300.</h5>
       <h4>Lato 400. This is a header in Lato 400.</h4>
       <h1>Lato 700. This is a header in Lato 700.</h1>
      </div>
  </div>
  <div class="style-sections">
      <h3>Body fonts</h3>
      <p>Droid Serif 400. This is a paragraph in Droid Serif 400.</p>
      <p class="strong">Droid Serif 700. This is a paragraph in Droid Serif 700.</p>
  </div>
  <div class="style-sections">
  <div>
    <h2>Headers</h2>
    <div class="gradient-line"></div>
     <h1>h1. This is a Header 1.</h1>
     <h2>h2. This is a Header 2.</h2>
     <h3>h3. This is a Header 3.</h3>
     <h4>h4. This is a Header 4.</h4>
     <h5>h5. This is a Header 5.</h5>
  </div>
</div>
  <div class="style-sections">
        <h2>Paragraphs</h2>
        <div class="gradient-line"></div>
        <p>p. This is a normal paragraph of body text.</p>
       <p class="light">p.light This is a paragraph of lighter body text.</p>
       <p class="lead">p.lead This is a lead paragraph of body text.</p>
  </div>
   <div class="style-sections">
       <h2>Unordered list</h2>
       <div class="gradient-line"></div>
       <ul>
         <li>ul li</li>
         <li>ul li</li>
         <li>ul li</li>
       </ul>
  </div>
     <div class="style-sections">
       <h2>Ordered list</h2>
       <div class="gradient-line"></div>
       <ol>
         <li>ol li</li>
         <li>ol li</li>
         <li>ol li</li>
       </ol>
     </div>
   </div>
  </div>
  <div class="row">
    <div class="col-md-5">
      <div class="style-sections">
        <h2>Alerts</h2>
        <div class="gradient-line"></div>
        <div class="alert alert-danger">.alert .alert-danger</div>
        <div class="alert alert-success">.alert .alert-success</div>
        <div class="alert alert-info">.alert .alert-info</div>
      </div>
      <div class="style-sections">
      <h2>Buttons</h2>
      <div class="gradient-line"></div>
      <h4 class="feature-example">.btn .btn-primary</h4>
      <div class="button-container flex">
        <button class="small inline btn btn-primary">.small</button>
        <button class="medium inline btn btn-primary">.medium</button>
        <button class="large inline btn btn-primary">.large</button>
      </div>
      <h4 class="feature-example">.btn .btn-danger</h4>
      <div class="button-container flex">
        <button class="small inline btn btn-danger">.small</button>
        <button class="medium inline btn btn-danger">.medium</button>
        <button class="large inline btn btn-danger">.large</button>
      </div>
    </div>
  </div>

    <div class="col-md-6 offset-md-1">
      <div class="style-sections">
        <h2>Links</h2>
        <div class="gradient-line"></div>
        <a href="#">This is a link.</a>
      </div>
      <div class="style-sections">
        <h2>Inputs</h2>
        <div class="gradient-line"></div>
        <label class="feature-example" for="input-example">Input.form-control</label>
        <input class="form-control" id="input-example" value="" placeholder="Input.form-control"/>
        <label class="feature-example" for="select-example">Select.form-control</label>
        <select value="Select" class="form-control">
            <option value="Select" selected>Select</option>
        </select>
        <label class="feature-example" for="textarea-example">Textarea.form-control</label>
        <textarea class="form-control" id="textarea-example" value="" placeholder="Textarea.form-control"></textarea>
      </div>
    </div>
</div>
</div>
</div>
<?php
include 'footer.php';
?>
