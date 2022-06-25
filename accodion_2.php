<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


/*General*/
body {
  color: #2c3e50;
  background: #ecf0f1;
  padding: 0 1em 1em;
}
h1 {
  margin: 0;
  line-height: 2;
  text-align: center;
}
h2 {
  margin: 0 0 .5em;
  font-weight: normal;
}
input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
/* Layout*/
.row {
  display:flex;
}
  .col {
    flex:1;
}
    &:last-child {
      margin-left: 1em;
    }
  

/* Accordion styles */
.tabs {
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 4px -2px rgba(0,0,0,0.5);
}
.tab {
  width: 100%;
  color: white;
  overflow: hidden;
}
  &-label {
    display: flex;
    justify-content: space-between;
    padding: 1em;
    background: #2c3e50;
    font-weight: bold;
    cursor: pointer;
}
    /* Icon */
    &:hover {
      background: #2c3e50;
    }
    &::after {
      content: "\276F";
      width: 1em;
      height: 1em;
      text-align: center;
      transition: all .35s;
    }
  
  &-content {
    max-height: 0;
    padding: 0 1em;
    color: #2c3e50;
    background: white;
    transition: all .35s;
  }
  &-close {
    display: flex;
    justify-content: flex-end;
    padding: 1em;
    font-size: 0.75em;
    background: #2c3e50;
    cursor: pointer;
}
    &:hover {
      background: #2c3e50;
    }
  


/* :checked*/
input:checked {
}
  + .tab-label {
    background: #2c3e50;
}
    &::after {
      transform: rotate(90deg);
    }
  
  ~ .tab-content {
    max-height: 100vh;
    padding: 1em;
  }


</style>
</head>
<body>

<h1>Pure CSS Accordion <sup>2.0</sup></h1>
<div class="row">
  <div class="col">
    <h2>Open <b>multiple</b></h2>
    <div class="tabs">
      <div class="tab">
        <input type="checkbox" id="chck1">
        <label class="tab-label" for="chck1">Item 1</label>
        <div class="tab-content">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
        </div>
      </div>
      <div class="tab">
        <input type="checkbox" id="chck2">
        <label class="tab-label" for="chck2">Item 2</label>
        <div class="tab-content">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. A, in!
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <h2>Open <b>one</b></h2>
    <div class="tabs">
      <div class="tab">
        <input type="radio" id="rd1" name="rd">
        <label class="tab-label" for="rd1">Item 1</label>
        <div class="tab-content">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, facilis.
        </div>
      </div>
      <div class="tab">
        <input type="radio" id="rd2" name="rd">
        <label class="tab-label" for="rd2">Item 2</label>
        <div class="tab-content">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, aut.
        </div>
      </div>
      <div class="tab">
        <input type="radio" id="rd3" name="rd">
        <label for="rd3" class="tab-close">Close others &times;</label>
      </div>
    </div>
  </div>
</div>

</body>
</html>