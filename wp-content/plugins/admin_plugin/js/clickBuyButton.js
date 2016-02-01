// Wait for the DOM to load
 jQuery(function(){
  // Then connect every button with class buy
  // to a function that will run when we click the button
  jQuery('button.buy').click(function(){
    // When clicking the button ask the user to confirm the buy
    confirm("Do you really want to buy this item?");
  });
});