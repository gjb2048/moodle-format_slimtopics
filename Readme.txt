Introduction
------------
Topic based course format without the heading of 'Topic Outline' or section numbers in the left hand column.

This version works with Moodle 2.2.x.+

Installation
------------
1. Put Moodle in 'Maintenance Mode' (docs.moodle.org/en/admin/setting/maintenancemode) so that there are no users using it bar you as the adminstrator.
2. Copy 'slimtopics' to '/course/format/'
3. If using a Unix based system, chmod 755 on config.php - I have not tested this but have been told that it needs to be done.
4. Login as an administrator and follow standard the 'plugin' update notification.  If needed, go to 'Site administration' -> 'Notifications' if this does not happen.
5. Put Moodle out of Maintenance Mode.

Upgrade Instructions
--------------------
1. Put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the adminstrator.
2. In '/course/format/' move old 'slimtopics' directory to a backup folder outside of Moodle.
3. Follow installation instructions above.
4. Put Moodle out of Maintenance Mode.

Uninstallation
--------------
1. Put Moodle in 'Maintenance Mode' so that there are no users using it bar you as the adminstrator.
2. It is recommended but not essential to change all of the courses that use the format to another.  If this is not done Moodle will pick the last format in your list of formats to use but display in 'Edit settings' of the course the first format in the list.  You can then set the desired format.
3. In '/course/format/' remove the folder 'slimtopics'.
4. Put Moodle out of Maintenance Mode.

Version Information
-------------------

27th March 2012 - Version 2.2.1
  1. Initial version following suggestion by Mary Evans (http://moodle.org/user/view.php?id=713800) in topic thread (http://moodle.org/mod/forum/discuss.php?d=177442).

G J Barnard - MSc, BSc(Hons)(Sndw), MBCS, CEng, CITP, PGCE - 27th March 2012.