<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <title>Cards</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('images/logo.jpg')}}" />
    <!--begin::Fonts-->
    {{--		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />--}}
    <link rel="stylesheet" href="{{asset('assets/css/font.css')}}" type="text/css" />

    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .row{
            flex-wrap: wrap;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="bg-body">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Card Deck Menu -->
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Toolbar-->
            <div class="toolbar" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                        <!--begin::Title-->
                        <div class="col">
                            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Click on a card to remove or draw from the deck</h1>
                            <a id="sort" class="btn btn-secondary" style="margin-right: 5px">Sort</a>
                            <a id="shuffle" class="btn btn-secondary ml-5">Shuffle</a>
                        </div>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="" class="container-xxl">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-12" id="deck_menu">
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Card Deck Menu -->
</div>
<!--end::Root-->
<!--end::Main-->
<!--begin::Javascript-->
<!-- Jquery Core Js -->
<script src="{{ asset('nia_assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('jQuery/assets/js/jquery-3.4.1.min.js') }}"></script>
<!-- Jquery Page Js -->
<script>

    // array of cards drawn out from the original deck of card
    let removed_cards_arr = [];

    // a function to sort deck of cards
    function sortDeck(suitesArr,valuesArr,deckArr,cardObj,ID) {

        for (let i = 0; i < valuesArr.length; i++) {
            for (let x = 0; x < suitesArr.length; x++) {
                cardObj = { Value: valuesArr[i], Suit: suitesArr[x] ,ID: ID++};
                deckArr.push(cardObj);
            }
        }

        return deckArr;
    }

    // a function to shuffle deck of cards
    function shuffleDeck(suitesArr,valuesArr,deckArr,cardObj,ID) {

        // sorting deck of cards
        let temp_arr = sortDeck(suitesArr,valuesArr,deckArr,cardObj,ID);

        // shuffling the deck cards
        for (let i = temp_arr.length - 1; i > 0; i--) {
            let j = Math.floor(Math.random() * i);
            let temp = temp_arr[i];
            temp_arr[i] = temp_arr[j];
            temp_arr[j] = temp;
        }

        return temp_arr;
    }

    function removerCardFromDeck(ID){
        // appending removed card to removed_cards_arr
        removed_cards_arr.push(ID);

        // hides the card which drawn from the original deck
        $('#'+ID).hide();
    }

    // a function to display the deck menu
    function displayDeckMenu(deckOfCards) {
        let card_html = ``;

        // looping through deckOfCards array
        for(let cardObj of deckOfCards){

            // cards in the removed_cards_arr are not being displayed
            if(!removed_cards_arr.includes(cardObj.ID)){
                card_html += `<div class="col-xl-2" id="${cardObj.ID}">
                                    <!--begin::Card Widget -->
                                    <a onclick="removerCardFromDeck(${cardObj.ID})" class="card bg-danger hoverable card-xl mb-xl-1">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <div class="fw-bold text-white">${cardObj.Value} of ${cardObj.Suit}</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Card Widget -->
                                </div>`;
            }
        }


        // display card deck html
        $('#deck_menu').html(card_html);
    }

    $(document).ready(function (){
        // card suit and value declarations
        const suits_arr = ["Club", "Spade", "Heart", "Diamond"];
        const values_arr = ["2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King","Ace"];

        // empty array to contain card object and it's id
        let deck_arr = [],
            card_obj = { Value: ``, Suit: ``, ID: `` },
            id = 0;

        // sorting deck of cards
        deck_arr = sortDeck(suits_arr,values_arr,deck_arr,card_obj,id);

        // displaying deck of cards menu
        displayDeckMenu(deck_arr)

        // when the sort btn is clicked
        $('#sort').on('click',function (e) {
            e.preventDefault();

            // emptying cards deck arr
            deck_arr = [];

            // sorting deck of cards
            deck_arr = sortDeck(suits_arr,values_arr,deck_arr,card_obj,id);

            // displaying deck of cards menu
            displayDeckMenu(deck_arr)
        })

        // when the shuffle btn is clicked
        $('#shuffle').on('click',function (e) {
            e.preventDefault();

            // emptying cards deck arr
            deck_arr = [];

            // sorting deck of cards
            deck_arr = shuffleDeck(suits_arr,values_arr,deck_arr,card_obj,id);

            // displaying deck of cards menu
            displayDeckMenu(deck_arr)
        })
    })
</script>

</body>
<!--end::Body-->
</html>
