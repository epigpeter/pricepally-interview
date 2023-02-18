$(document).ready(function() {
  //Get item container
  var itemContainerId = "#shop .item-container";

  //Request type - all (shop), pally and recommended food items
  var filterBy = "all";

  //Init loader
  $(itemContainerId).append(loader());

  //Load items when window is loaded
  loadMoreItems(itemContainerId, filterBy);

  $('#food-tabs .nav-link').on('click', function(e) {
      if (e.target.href) {
        itemContainerId = stripOffUrl(e.target.href + ' .item-container');
        filterBy = $(e.target).data('filter-by');

        if ($(itemContainerId + " .food-item").length === 0 && filterBy) {
            //Init loader
            $(itemContainerId).append(loader());
            loadMoreItems(itemContainerId, filterBy);
        }
    
      }
  });

  //Load items when load more button is cliked
  $("#load-more-btn").on("click", function() {
    $(this).parent().parent().parent().append(loader());
    loadMoreItems(itemContainerId, filterBy);
  });
});

function loadMoreItems(itemContainerId, filterBy) {
  // Number of items already loaded
  var skip = $(itemContainerId + " .food-item").length;

  $.ajax({
    url: "/food-items/" + filterBy + "?skip=" + skip,
    method: "GET",
    success: function(response) {
      // Hide loader when items have finished loading
      $(".loader").remove();

      // Display total deals
      displayTotalDeals(response.total, itemContainerId);

      // append new items to existing list
      $(itemContainerId).append(response.html);

      // hide "Load More" button if there are no more items to load
      if (response.last_page) {
        $(itemContainerId).parent().find("#load-more-btn").hide();
      }
    }
  });
}

function loader() {
  var el = $(document.createElement("div"));
  el.addClass("loader");
  return el;
}
function displayTotalDeals(total, itemContainerId) {
    $(itemContainerId ).parent().find('#total-deals').html(
        total + ' Available Deals'
    );
}
function stripOffUrl(s) {
    return s.split('/').slice(3).join('/');
}
