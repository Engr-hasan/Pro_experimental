@extends('layouts.dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="ibox-content" style="padding:20px;">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 center-xs">
                    <div class="input-group">
                        <!--<div class="search-input-wrapper">-->
                        <input id="searchTextField" class="form-control ng-pristine ng-untouched ng-valid ng-valid-maxlength" type="text" ng-model="searchKeyword" maxlength="50" placeholder="Keywords/Tags"><!--<span title="Clear" ng-click="clearSearch();">&times;</span>-->
                        <!--</div>-->
                        <!--<input id="searchText" type="text" class="form-control" ng-model="searchKeyword" maxlength="100" placeholder="Search flash cards" />-->
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary" ng-click="searchFlashCards()" style="border-radius:0px;">Search</button>
                            <!--<img id="searchTooltip" data-toggle="popover" data-container="body" data-placement="right" src="/assets/media/images/info.png" width="20" style="cursor: pointer;margin-left:5px;margin-top:-2px;" />
                            <div id="searchTooltipDescription" style="display: none;">
                                <div class="feed-activity-list">
                                    Search from the questions you have already used by entering the question ID or keywords
                                </div>
                            </div>-->
                        </span>
                    </div>
                    <small ng-show="searchError" style="font-size: 13px; color: #be5462;" class="ng-hide">Please enter keywords to search</small>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="deckContainer ng-scope" ng-repeat="deck in deckValues">
            <div class="deckheader">
                <div class="pull-left cursor" ng-click="showDeckEditMenu($event,'deckEditMenu_'+deck.deckId)" style="display:flex;align-items:center">
                    <div class="deckbadge ng-binding" ng-style="{'background': deck.deckColor}" style="background: rgb(241, 88, 86);">N</div>&nbsp;&nbsp;
                    <span style="font-weight:500;font-size:14pt;margin-top:0px;" class="ng-binding">Notes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fal fa-2x fa-ellipsis-v"></i>
                </div>
                <div class="pull-right">
                    <!--<i class="fal fa-lg fa-list-ul cursor" style="vertical-align:sub" title="See All Flash Cards" ng-click="getFlashCards(deck.deckId,0,'all');" ng-if="deck.noOfFlashCards > 0"></i>&nbsp;&nbsp;&nbsp;
                    <i class="fal fa-lg fa-edit cursor" title="Edit Deck" ng-click="showEditDeck($event,deck);"></i>&nbsp;&nbsp;&nbsp;
                    <i class="fal fa-lg fa-trash-alt cursor" title="Delete Deck" ng-click="deleteDeck(deck.deckId);" ng-show="deckValues.length > 1"></i>&nbsp;&nbsp;-->
                    <!-- ngIf: deck.noOfFlashCards > 0 -->
                </div>

                <div id="deckEditMenu_3129096" class="deckEditMenu animated fadeIn" style="display:none">
                    <div class="menuContent">
                        <div class="menuItem" title="Edit Deck" ng-click="showEditDeck($event,deck);"><i class="fal fa-lg fa-edit cursor"></i>&nbsp;&nbsp;Edit</div>
                        <div class="menuItem ng-hide" title="Delete Deck" ng-click="deleteDeck(deck.deckId);" ng-show="deckValues.length > 1" style="border-top:1px solid #eaeaea;"><i class="fal fa-lg fa-trash-alt cursor"></i>&nbsp;&nbsp;Delete</div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="cardscroll-wrapper" ng-style="{'height' : (deck.flashcardList &amp;&amp; deck.flashcardList.length) ? '265px' : ''}">
                <!-- ngRepeat: card in deck.flashcardList | limitTo : flashcardsCount -->
                <!-- ngIf: deck.flashcardList.length == 0 --><div ng-if="deck.flashcardList.length == 0" class="ng-scope">
                    <h3 style="font-weight:300">No cards found for this deck.</h3>
                </div><!-- end ngIf: deck.flashcardList.length == 0 -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
