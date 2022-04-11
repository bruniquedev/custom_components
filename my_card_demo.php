<!--card starts here-->
         <div class="card">

           <div class="card_left">

<div class="card-img" style="background-image: url('{{ asset('images/vlcsnapa.png') }}');"></div>
</div>


        <div class="card_right">
               <h1> KILL  BILL:  VOL.  1</h1>
    <div class="card_right__details">
       <ul>
        <li> 2003</li>
        <li> 111 min</li>
        <li> Action</li>
    </ul>

    <div class="card_right__rating">
       <div class="card_right__rating__stars">
<div class="tst-rating">
<i class="test-ion  ion-android-star"></i>
<i class="test-ion  ion-android-star"></i>
<i class="test-ion  ion-android-star"></i>
<i class="test-ion  ion-android-star"></i>
<i class="test-ion  ion-android-star"></i>
</div>  
    </div>  
    </div> 

    <div class="card_right__review">
 <p> The lead character, called 'The Bride,' was a member <br/> of the Deadly Viper Assassination Squad, led by her <br/> lover 'Bill.' Upon realizing she was pregnant with Bill's<br/> child, 'The Bride' decided to escape her life as a killer.<br/> She fled to Texas, met a young man, who, on the day<br/> of their wedding rehearsal was gunned down by....</p>
 <a href="http://www.imdb.com/title/tt0266697/plotsummary?ref_=tt_stry_pl" target="_blank"> Read more</a>
 <div class="card_right__button">
<a href="http://www.youtube.com/watch?v=ot6C1ZKyiME" target="_blank"> WATCH TRAILER</a> 
    </div>
    </div>
    </div>
    </div>


         </div><!--card ends here-->  


         /*styling a cool design*/
.card {
  width:97%;
  height:400px;
  background:transparent;
  background:#e2e2e2;
  /*position:absolute;*/
  left:0;
  right:0;
  margin:auto;
  top:0;
  bottom:0;
  border-radius:10px;
  -webkit-border-radius:10px;
  -moz-border-radius:10px;
  box-shadow: 0px 20px 30px 3px rgba(0, 0, 0, 0.55);
}
  .card_left {
    width:60%;
    height:400px;
    float:left;
    overflow:hidden;
    background:transparent;
  }
    .card-img {
      width:100%;
      height: 100%;
    display: block;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
      border-radius:10px 0 0 10px;
      -webkit-border-radius:10px 0 0 10px;
      -moz-border-radius:10px 0 0 10px;
     /* position:relative;*/
    }
  
  .card_right {
    width:40%;
    float:left;
    background:#000000;
    height:400px;
    border-radius:0 10px 10px 0;
    -webkit-border-radius:0 10px 10px 0;
    -moz-border-radius:0 10px 10px 0;
  }
  .card_right h1 {
    color:white;
    font-family: 'Montserrat', sans-serif;
    font-weight:400;
    text-align:left;
    font-size:40px;
    margin:30px 0 0 0;
    padding:0 0 0 40px;
    letter-spacing:1px;
   }

    .card_right__details ul {
        list-style-type:none;
        padding:0 0 0 40px;
        margin:10px 0 0 0;
      }
      .card_right__details ul li {
          display:inline;
          color:#e3e3e3;
          font-family: 'Montserrat', sans-serif;
          font-weight:400;
          font-size:14px;
          padding:0 40px 0 0;
        }

        .card_right__rating{
          padding: 0 0 0 40px;
        }

    .card_right__review p{
        color:white;
        font-family: 'Montserrat', sans-serif;
        font-size:12px;
        padding:0 40px 0 40px;
        letter-spacing:1px;
        margin:10px 0 10px 0;
        line-height:20px;
      }

     .card_right__review a {
        text-decoration:none;
        font-family: 'Montserrat', sans-serif;
        font-size:14px;
        padding:0 0 0 40px;
        color:#ffda00;
        margin:0;
      }
    
    .card_right__button{
    padding:0 0 0 40px;
        margin:30px 0 0 0;
      }

.card_right__button a {
        color:#ffda00;
        text-decoration:none;
        font-family: 'Montserrat', sans-serif;
        border:2px solid #ffda00;
        padding:10px 10px 10px 40px;
        font-size:12px;
        background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/343086/COMdoWZ.png);
        background-size:12px 12px;
        background-repeat:no-repeat;
            background-position: 7% 50%;
        border-radius:5px;
          -webkit-transition-property: all;
          transition-property: all;
  -webkit-transition-duration: .5s;
          transition-duration: .5s;
      }
     .card_right__button a:hover {
            color: #000000;
  background-color: #ffda00;
        background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/343086/rFQ5dHA.png);
          background-size:12px 12px;
        background-repeat:no-repeat;
            background-position: 10% 50%;
  cursor: pointer;
  -webkit-transition-property: all;
          transition-property: all;
  -webkit-transition-duration: .5s;
          transition-duration: .5s;
      }
        
    




/*end of styling a cool design*/