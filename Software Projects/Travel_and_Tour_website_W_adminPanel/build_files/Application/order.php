<!--header-->
<?php $this->load->view('layout/header'); ?>

<!--main content-->
<style>
    .hotelBook {
        width: 90%;
        position: relative;
        margin: 10px auto;

    }

    .hotelBook .hotelContent {
        display: flex;
    }

    .hotelBook .hotelContent img {
        width: 420px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border: 5px solid #fff;
        margin-right: 20px;
    }

    .hotelBook .hotelContent .rightImages img {
        width: 220px;
    }

    .hotelBook .hotelContent .rightRating {
        width: calc(100% - 640px);
        border: 1px solid lightgray;
        border-radius: 20px;
        padding: 6px 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .hotelBook .hotelContent .rightRating h5 {
        white-space: nowrap;
        width: 80%;
        margin: 7px 0;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        padding: 18px;
        border-radius: 10px;

    }

    .hotelBook .hotelContent .rightRating h5 span {
        margin-bottom: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
        padding: 9px 22px;
        border-radius: 10px;
        margin-right: 10px;

    }

    .hotelBook .contentSec {
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .hotelBook .contentSec .contentSecLeft {
        width: calc(100% -250px);

    }

    .hotelBook .contentSec .contentSecLeft .hotelAmenities {
        display: flex;
        align-items: center;

    }

    .hotelBook .contentSec .contentSecLeft .hotelAmenities li {
        margin: 0 10px;

    }

    .hotelBook .contentSec .contentSecRight {
        width: 250px;
    }

    .hotelBook .contentSec .contentSecRight iframe {
        border-radius: 20px;
        box-shadow: 0 0 20px rgb(0, 0, 0, 0.08);
        width: 90%;
        height: 200px;
        float: right;
        margin-top: 20px;
    }

    .hotelBook .bookingdetails {
        padding: 20px;
        border: 1px solid lightgray;
        border-radius: 20px;
        width: 100%;
    margin-bottom: 15px;
    }

    .hotelBook .bookingdetails .hotelBookContent {

        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .hotelBook .bookingdetails .hotelBookContent img {
        width: 90px;
        height: 90px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);

    }

    .hotelBook .bookingdetails .hotelBookContent .contents h4,
    h5,
    h6 {
        margin: 0;
        margin-bottom: 10px;
    }

    .hotelBook .bookingdetails .hotelBookContent .contents h5 i {
        color: orange;

    }

    .hotelBook .bookingdetails .hotelBookContent .contents h5 span {
        padding: 2px 14px;
        border: 1px solid lightgray;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: #fff;
        margin: 0 15px;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out {
        width: 100%;
        display: flex;
        /* flex-wrap: wrap;*/
        align-items: center;
        background: #f1fafdff;
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
        margin-top: 15px;
        /* padding: 10px 15px;*/


    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN {
        margin-right: 10px;
        padding: 14px 17px;
        white-space: nowrap;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN label,
    p {
        font-size: 13px;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN h6 {
        font-size: 13px;
        font-weight: 500;
        margin: 5px 0;

    }


    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN h6 span {
        font-size: 16px;
        font-weight: 600;
        color: black;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .night {
        padding: 2px 14px;
        border: 1px solid lightgray;
        border-radius: 15px;
        font-size: 11px;
        font-weight: 500;
        color: #8d8d8d;
        background: white;
        margin: 0 10px;
        white-space: nowrap;

    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span {
        color: #2f2f2f;
    }


    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span b {
        color: black;
    }

    .hotelBook .bookingdetails .hotelBookCheckIN-out .checkIN2 span:nth-child(2) {
        border-left: 1px solid black;
        border-right: 1px solid black;
        margin: 0 15px;
        padding: 0 15px;
    }

    .hotelBook .alternativeDetails {
        width: 100%;
        display: flex;
        align-items: end;
        justify-content: space-between;
        margin-top: 20px 0;
        gap: 10px;
    }

    .hotelBook .alternativeDetails .formCard {
        width: 25%;
        display: flex;
        flex-direction: column;


    }

    .hotelBook .alternativeDetails .formCard label {
        font-size: 14px;
        font-weight: 600;
    }


    .hotelBook .alternativeDetails .formCard input {
        margin-top: 5px;
        padding: 10px 15px;
        border-radius: 10px;
        border: 1px solid lightgray;
    }

    .hotelBook .alternativeDetails .formCard input[type="submit"] {
        background: rgb(182, 94, 18);
        border: 1px solid rgb(182, 94, 18);
        color: #fff;
        cursor: pointer;
        transition: 0.3s linear;
    }

    .hotelBook .alternativeDetails .formCard input[type="submit"]:hover {
        background: transparent;
        color: rgb(182, 94, 18);


    }
</style>

<!--Hotel book-->
<div class="hotelBook">
      <h4>Booking Details</h4>
</div>


<script>
    const mainUrl = window.location.href.split('?');
    const hotelID = mainUrl[1];
    const cityValue = mainUrl[2];
    const dateValue1 = mainUrl[3];
    const dateValue2 = mainUrl[4];
    const peopleValue = mainUrl[5];


    const fetchData = async () => {
        let id = <?php echo json_encode((int)($this->session->userdata('userdata')['id'] ?? 0)); ?>;
       
        try {
            const response = await fetch("<?php echo base_url('Welcome/hotelBooking') ?>", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({id})
            });

            const data = await response.json();

            if (data) {
                console.log(data);


     let  hotelBook = document.getElementsByClassName('hotelBook')[0];         
                //booking details

                //stars
                let stars = (data) => {
                   
               
                
       const fullStars = Math.floor(data);
const halfStar = data % 1 >= 0.5 ? 1 : 0;
const emptyStars = 5 - (fullStars + halfStar);

 return `
    ${'<i class="bi bi-star-fill"></i>'.repeat(fullStars)}
    ${halfStar ? '<i class="bi bi-star-half"></i>' : ''}
    ${'<i class="bi bi-star"></i>'.repeat(emptyStars)}
`;
 }


//dates
const formatDateParts = (date) => {
    date = new Date(date);
    return {
        weekday: date.toLocaleDateString("en-GB" , {
            weekday: 'short'
        }),
        day: date.toLocaleDateString("en-GB" , {
            day: '2-digit'
        }),
    month: date.toLocaleDateString("en-GB" , {
            month: 'short'
        }),
    year: date.toLocaleDateString("en-GB" , {
            year: 'numeric'
        })
    }
}


             



    

data.forEach((el, i) => {
    let bookingdetails = document.createElement('div');
    bookingdetails.className = 'bookingdetails';

    bookingdetails.innerHTML = `
        <div class="hotelBookContent">
            <div class="contents">
                <h4>${el.name}</h4>
                <h5>
${stars(el.rate)}
                    <span>Family Friendly</span>
                </h5>
                <h6>${el.location}</h6>
            </div>
            <img src="<?php echo base_url('/assets/images/Hotels-photos/'); ?>${el.poster}" alt="">
        </div>

        <div class="hotelBookCheckIN-out">
            <div class="checkIN">
                <label for="">CHECK IN</label>
                <h6>${formatDateParts(el.startDate).weekday}
                    <span>${formatDateParts(el.startDate).day} ${formatDateParts(el.startDate).month}</span> 
                    ${formatDateParts(el.startDate).year}
                </h6>
                <p>12 PM</p>
            </div> 

            <p class="night">${el.nights} Nights</p>

            <div class="checkIN">
                <label for="">CHECK OUT</label>
                <h6>${formatDateParts(el.endDate).weekday}
                    <span>${formatDateParts(el.endDate).day} ${formatDateParts(el.endDate).month}</span> 
                    ${formatDateParts(el.endDate).year}
                </h6>
                <p>12 PM</p>
            </div>

            <div class="checkIN checkIN2">
                <span><b>${el.nights}</b> Nights</span>
                <span><b>${el.peopleValue}</b> People</span>
                <span><b>1</b> Room</span>
            </div>

             <div class="checkIN">
                <label for="">Price</label>
                <h6>
                    $<span>${(el.price) - ((el.mrp * el.discount) / 100)}</span>
                </h6>
                <p>$<b>${el.mrp}</b> with <b>${Math.floor(el.discount)}% discount</b></p>
            </div>
        </div>
    `;

    hotelBook.appendChild(bookingdetails); 
});


            }
        }
        catch{

        }
    }
     

     fetchData();
</script>









<!--footer-->
<?php $this->load->view('layout/footer'); ?>