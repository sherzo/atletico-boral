$('.dropdown-button-tho').dropdown({
                  inDuration: 300,
                  outDuration: 225,
                  constrainWidth: true, // Does not change width of dropdown to that of the activator
                  hover: true, // Activate on hover
                  gutter: ($('.dropdown-content').width()*3)/3.0 + 1, // Spacing from edge
                  belowOrigin: false, // Displays dropdown below the button
                  alignment: 'left', // Displays dropdown with edge aligned to the left of button
                  stopPropagation: true // Stops event propagation
                });
