/**
 * library for ajaxcourse formats, the classes and related functions for
 * sections and resources.
 *
 * This library requires a 'main' object created in calling document.
 *
 * Drag and drop notes:
 *
 *   Dropping an activity or resource on a section will always add the activity
 *   or resource at the end of that section.
 *
 *   Dropping an activity or resource on another activity or resource will
 *   always move the former just above the latter.
 */

section_class.prototype.changeId = function(newId) {
    this.sectionId = newId;
    //this.numberDisplay.firstChild.data = newId;

    if (main.marker == this) {
        main.update_marker(this);
    }
};
