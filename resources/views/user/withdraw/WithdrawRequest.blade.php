<div class="db-page-block" id="globalAccount">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="db-page">
                    <div class="row">
                        @include('layouts.upnl.sidebar')
                        <div class="col-12 col-xl-9">
                            <div class="db-page__right globalAccount globalAccountSend">
                                <div class="db-page__title-block">
                                    <h2 class="db-page__title">Withdraw</h2>
                                </div>
                                <div class="db-page__descr-block">
                                    <div class="db-page__descr">Unlimited cryptocurrency transfers from your wallet with no delays or additional fees.</div>
                                </div>
                                <div class="db-page__content">
                                    <div class="db-send-form-block">
                                        <div class="db-send-form-wrapper">
                                            <form action="/withdraw/" method="post" class="db-send-form globalAccountSendForm">
                                                <div class="db-send-form__left">

                                                    <div class="db-send-form__fields">


                                                        <div class="field-block">

                                                            <div class="field-top-block">
                                                                <div class="field-top">
                                                                    <div class="field-top__left">
                                                                        <div class="field-title-block">
                                                                            <div class="field-title">
                                                                                Currency
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-top__right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field field--select">
                                                                <div class="dropdown bootstrap-select select-currency">
                                                                  
                                                                    <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-11" aria-haspopup="listbox" aria-expanded="false"
                                                                    title="TetherUSDTUSDT">
                                                                        <div class="filter-option">
                                                                            <div class="filter-option-inner">
                                                                                <div class="filter-option-inner-inner">
                                                                                    <div class="select-currency-item">
                                                                                        <div class="select-currency-item__left">
                                                                                            <div class="currency-item">
                                                                                                <div class="currency-icon currency-icon--usdt"><img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/usdt.svg" alt=""></div>
                                                                                                <div class="currency-item__content">
                                                                                                    <div class="currency-item__title">Tether</div>
                                                                                                    <div class="currency-item__abbr">USDT</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="select-currency-item__right">
                                                                                            <div class="select-currency-item__abbr">USDT</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                    <div class="dropdown-menu ">
                                                                        <div class="bs-searchbox">
                                                                            <input type="search" class="form-control" autocomplete="off" placeholder="Search currency" role="combobox" aria-label="Search" aria-controls="bs-select-11" aria-autocomplete="list">
                                                                        </div>
                                                                        <div class="inner show" role="listbox" id="bs-select-11" tabindex="-1">
                                                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-fieldset-block">
                                                            <div class="form-fieldset-top-block">
                                                                <div class="form-fieldset-top">
                                                                    <div class="form-fieldset-top__left">
                                                                        <div class="form-fieldset-title-block">
                                                                            <div class="form-fieldset-title">Network</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-fieldset-top__right"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-fieldset form-fieldset--small-padding">


                                                                <div class="network-radio-items formNetworkItems">
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="usdt" value="tether_bep-20_usdt" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="usdt" value="tether_erc-20_usdt" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--eth">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/eth.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">ERC20 (ETH)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Ethereum network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="usdt" value="tether_trc-20_usdt" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--trx">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/trx.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">TRC20 (TRON)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                TRON network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="usdc" value="usdcoin_bep-20_usdc" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="usdc" value="usdcoin_erc-20_usdc" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--eth">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/eth.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">ERC20 (ETH)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Ethereum network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="btc" value="bitcoin_main_btc" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--btc">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/btc.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BTC</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Bitcoin network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="btc" value="bitcoin_bep-20_btcb" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="eth" value="ethereum_main_eth" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--eth">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/eth.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">ETH</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Ethereum network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="eth" value="ethereum_bep-20_eth" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="bnb" value="binance_bsc_bnb" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BSC</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="sol" value="solana_main_sol" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--sol">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/sol.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">SOL</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Solana network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="dot" value="polkadot_bep-20_dot" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="ltc" value="litecoin_main_ltc" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--ltc">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/ltc.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">LTC</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Litecoin network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="doge" value="dogecoin_main_doge" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--doge">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/doge.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">DOGE</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Dogecoin network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="trx" value="tron_main_trx" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--trx">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/trx.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">TRON</div>
                                                                                            <div class="network-radio__descr">
                                                                                                TRON network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="xlm" value="stellar_main_xlm" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--xlm">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/xlm.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">XLM</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Stellar network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="xrp" value="ripple_main_xrp" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--xrp">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/xrp.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">XRP</div>
                                                                                            <div class="network-radio__descr">
                                                                                                XRP network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="ada" value="cardano_main_ada" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--ada">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/ada.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">ADA</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Cardano network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="bch" value="bitcoincash_main_bch" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bch">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bch.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BCH</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Bitcoin Cash network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="link" value="chainlink_bep-20_link" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--bnb">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/bnb.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">BEP20 (BSC)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Binance Smart Chain network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="link" value="chainlink_erc-20_link" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--eth">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/eth.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">ERC20 (ETH)</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Ethereum network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="network-radio-item-wrapper formNetworkItemsItem d-none">
                                                                        <div class="network-radio-item">
                                                                            <div class="field field--radio">
                                                                                <label class="radio-container">
                                                                                    <input type="radio" name="payment" data-currency="pol" value="polygon_main_pol" class="radio-input">
                                                                                    <div class="network-radio">
                                                                                        <div class="network-radio__icon">
                                                                                            <div class="currency-icon currency-icon--pol">
                                                                                                <img class="image" src="{{asset('')}}assets/oora3/images/svg/currency/pol.svg" alt="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__content">
                                                                                            <div class="network-radio__title">POL</div>
                                                                                            <div class="network-radio__descr">
                                                                                                Polygon network
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="network-radio__switcher"></div>
                                                                                    </div>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="form-notice-block">
                                                                    <div class="form-notice">
                                                                        <div class="form-notice__icon"></div>
                                                                        <div class="form-notice__text">
                                                                            Make sure that the recipient's wallet supports the selected network.
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>




                                                        <div class="form-amount-block">

                                                            <div class="form-amount">
                                                                <div class="form-amount__top">
                                                                    <div class="form-amount__top-left">
                                                                        <div class="form-amount__title">
                                                                            Amount
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-amount__top-right">
                                                                        <div class="form-amount__max globalAccountSendFormMin d-none" data-mask="Min: [amount] [currency]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-amount__field">
                                                                    <div class="field-block">
                                                                        <div class="field field--input field--amount field--has-right-panel">
                                                                            <input type="text" name="amount" placeholder="Amount" autocomplete="off" value="10000">
                                                                            <div class="field-right-panel">
                                                                                <div class="field-currency inputAmountCurrency">
                                                                                    USDT </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-amount__bottom">
                                                                    <div class="form-amount__bottom-left">
                                                                        <div class="form-amount__available" data-module="user-balance" data-currency="usdt" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="usdc" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="btc" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="eth" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="bnb" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="sol" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="dot" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="ltc" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="doge" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="trx" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="xlm" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="7" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="xrp" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="ada" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="6" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="bch" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="link" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                        <div class="form-amount__available d-none" data-module="user-balance" data-currency="pol" style="font-size:12px;">
                                                                            Available: <span class="text--green optimaDynamicAmount" data-mask="[amount]" data-round="8" data-type="currency">0</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-amount__bottom-right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="form-fieldset-block">
                                                            <div class="form-fieldset-top-block">
                                                                <div class="form-fieldset-top">
                                                                    <div class="form-fieldset-top__left">
                                                                        <div class="form-fieldset-title-block">
                                                                            <div class="form-fieldset-title">Address</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-fieldset-top__right">

                                                                        <div class="address-list-modal-button-block">
                                                                            <button type="button" class="address-list-modal-button" onclick="withdrawalFavouriteAddresses($(this));">
                                                                                <div class="address-list-modal-button__icon">
                                                                                </div>
                                                                                <div class="address-list-modal-button__text">
                                                                                    Favorite addresses
                                                                                </div>
                                                                            </button>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-fieldset form-fieldset--small-padding">
                                                                <div class="field-block field-block--small-margin">
                                                                    <div class="field field--input field--has-icon field--address">
                                                                        <input type="text" name="wallet" data-placeholder="[network] address" autocomplete="off" placeholder="BEP20 (BSC) address">
                                                                        <div class="field-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="field-block field-block--small-margin d-none">
                                                                    <div class="field field--input field--has-icon field--tag">
                                                                        <input type="text" name="tag" data-placeholder-tag="Destination tag" data-placeholder-memo="Memo" autocomplete="off" placeholder="Destination tag">
                                                                        <div class="field-icon"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="checkbox-list-block d-none">
                                                                    <div class="checkbox-list">
                                                                        <div class="checkbox-list-item-wrapper">
                                                                            <div class="checkbox-list-item">
                                                                                <div class="field field--checkbox">
                                                                                    <label class="checkbox-container">
                                                                                        <input type="checkbox" name="checkbox" value="1" class="checkbox-input">
                                                                                        <div class="checkbox-custom">
                                                                                            <div class="checkbox-custom__switcher">
                                                                                            </div>
                                                                                            <div class="checkbox-custom__text">

                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>



                                                        <div class="field-block globalAccountSendFormPin d-none">

                                                            <div class="field-top-block">
                                                                <div class="field-top">
                                                                    <div class="field-top__left">
                                                                        <div class="field-title-block">
                                                                            <div class="field-title">
                                                                                Payment password
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field-top__right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field-block">
                                                                <div class="field field--input field--has-icon field--password field--has-right-panel">
                                                                    <input type="password" name="pin" maxlength="255" placeholder="Payment password" autocomplete="off">
                                                                    <div class="field-icon"></div>
                                                                    <div class="field-right-panel">
                                                                        <div class="password-type-toggle-btn-block">
                                                                            <button class="password-type-toggle-btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>
                                                <div class="db-send-form__right">

                                                    <div class="db-send-form-summary-block">
                                                        <div class="db-send-form-summary-title">
                                                            Summary
                                                        </div>
                                                        <div class="db-send-form-summary-items-block">
                                                            <div class="db-send-form-summary-items">
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Network fee
                                                                        </div>
                                                                        <div class="db-send-form-summary-item__content">

                                                                            <div class="db-send-form-summary-item__fee">
                                                                                <div class="db-send-form-summary-item__fee__amount globalAccountSendFormFee">0.00065457 USDT</div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Estimated time
                                                                        </div>
                                                                        <div class="db-send-form-summary-item__content">
                                                                            <div class="db-send-form-summary-item__time">
                                                                                <div class="db-send-form-summary-item__time__icon"></div>
                                                                                <div class="db-send-form-summary-item__time__text">
                                                                                    ~ 0 - 15 minutes
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="db-send-form-summary-item-wrapper">
                                                                    <div class="db-send-form-summary-item">
                                                                        <div class="db-send-form-summary-item__title">
                                                                            Amount due
                                                                        </div>
                                                                        <div class="db-send-form-summary-item__content">
                                                                            <div class="db-send-form-summary-item__receive">
                                                                                <div class="db-send-form-summary-item__receive__amount globalAccountSendFormReceive">10000.00065457 USDT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-button-block">
                                                        <button type="submit" class="green-gradient-btn iconed-btn">
                                                            <div class="iconed-btn__text">Send Now</div>
                                                            <div class="iconed-btn__icon"></div>
                                                        </button>
                                                    </div>


                                                </div>
                                                <input type="hidden" name="payments_type" value="withdraw">
                                                <input type="hidden" name="old_currency" value="usdt">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>