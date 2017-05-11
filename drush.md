\
Global options (see `drush topic core-global-options` for the full list):\
 -d, --debug                               Display even more information, including internal messages.\
 -h, --help                                This help system.\
 -n, --no                                  Assume 'no' as answer to all prompts.\
 -r <path>, --root=<path>                  Drupal root directory to use (default: current directory).\
 -s, --simulate                            Simulate all relevant actions (don't actually change the system).\
 -l <http://example.com:8888>,             URI of the drupal site to use (only needed in multisite environments or when running on an alternate port).\
 --uri=<http://example.com:8888>\
 -v, --verbose                             Display extra information about the command.\
 -y, --yes                                 Assume 'yes' as answer to all prompts.

Core Drush commands: (core)\
 core-config (conf,    Edit drushrc, site alias, and Drupal settings.php files.\
 config)\
 core-cron (cron)      Run all cron hooks in all active modules for specified site.\
 core-execute (exec,   Execute a shell command. Usually used with a site alias.\
 execute)\
 core-quick-drupal     Download, install, serve and login to Drupal with minimal configuration and dependencies.\
 (qd, cutie)\
 core-requirements     Provides information about things that may be wrong in your Drupal installation, if any.\
 (status-report, rq)\
 core-rsync (rsync)    Rsync the Drupal tree to/from another server using ssh.\
 core-status (status,  Provides a birds-eye view of the current Drupal installation, if any.\
 st)\
 drupal-directory      Return the filesystem path for modules/themes and other key folders.\
 (dd)\
 help                  Print this help message. See `drush help help` for more options.\
 php-eval (eval, ev)   Evaluate arbitrary php code after bootstrapping Drupal (if available).\
 php-script (scr)      Run php script(s).\
 updatedb (updb)       Apply any database updates required (as with running update.php).\
 updatedb-status       List any pending database updates.\
 (updbst)\
 version               Show drush version.\
CTools commands: (ctools)\
 ctools-export (ctex)  Export multiple CTools exportable objects directly to code.\
 ctools-export-disabl  Disable CTools exportables.\
 e (cted)\
 ctools-export-enable  Enable CTools exportables.\
 (ctee)\
 ctools-export-info    Show available CTools exportable objects.\
 (ctei)\
 ctools-export-revert  Revert CTools exportables from changes overridden in the database.\
 (cter)\
 ctools-export-view    View CTools exportable object code output.\
 (ctev)\
Cache commands: (cache)\
 cache-clear (cc)      Clear a specific cache, or all drupal caches.\
 cache-get (cg)        Fetch a cached object and display it.\
 cache-rebuild (cr,    Rebuild a Drupal 8 site and clear all its caches.\
 rebuild)\
 cache-set (cs)        Cache an object expressed in JSON or var_export() format.\
Config commands: (config)\
 config-edit (cedit)   Open a config file in a text editor. Edits are imported into active configration after closing editor.\
 config-export (cex)   Export config from the active directory.\
 config-get (cget)     Display a config value, or a whole configuration object.\
 config-import (cim)   Import config from a config directory.\
 config-list (cli)     List config names by prefix.\
 config-merge (cm)     Merge configuration data from two sites.\
 config-set (cset)     Set config value directly in active configuration.\
All commands in color_field: (color_field)\
 color-field-dematte   Downloads the Dematte Color Picker plugin.\
 color-field-eyecon    Downloads the EyeCon Color Picker plugin.\
 color-field-plugin-d  Downloads a Color Picker plugin.\
 ownload (cfpd)\
 color-field-simple    Downloads the Simple Color Picker plugin.\
 color-field-spectrum  Downloads the Spectrum Color Picker plugin.\
All commands in dkan_datastore_api: (dkan_datastore_api)\
 datastore-create      Creates a datastore with the file.\
 (dsc)\
 datastore-drop (dsd)  Drops the datastore.\
 datastore-file-delet  Deletes the file on a datastore.\
 e (dsfd)\
 datastore-file-uri    Shows the URI of the datastore file.\
 (dsfuri)\
 datastore-file-url    Shows the URL of the datastore file.\
 (dsfurl)\
 datastore-rows (dsr)  Get the number of rows in the datastore.\
 datastore-update      Updates the datastore with the file.\
 (dsu)\
All commands in dkan_harvest: (dkan_harvest)\
 dkan-harvest          Run a harvest (cache and migration) on a single source or all the available sources if no argument is provided.\
 (dkan-h,\
 dkan-harvest-run,\
 dkan-hr)\
 dkan-harvest-cache    Run a harvest cache on a single source or all the available sources if the argument is not provided.\
 (dkan-hc,\
 dkan-cache-harvested\
 -data, dkan-chd)\
 dkan-harvest-deregis  Run a harvest rollback on a single source.\
 ter (dkan-hdr)\
 dkan-harvest-migrate  Run a harvest migrate on a single source or all the available sources if the argument is not provided.\
 (dkan-hm,\
 dkan-migrate-cached-\
 data, dkan-mcd)\
 dkan-harvest-rollbac  Run a harvest rollback on a single source.\
 k (dkan-hr)\
 dkan-harvest-status   Status Harvest Sources available\
 (dkan-hs)\
All commands in features: (features)\
 features-add (fa)     Add a component to a feature module. (DEPRECATED: use features-export)\
 features-components   List features components.\
 (fc)\
 features-diff (fd)    Show the difference between the default and overridden state of a feature.\
 features-diff-all     Show the code difference for all enabled features not in their default state.\
 (fda)\
 features-export (fe)  Export a feature from your site into a module.\
 features-list (fl,    List all the available features for your site.\
 features)\
 features-revert (fr)  Revert a feature module on your site.\
 features-revert-all   Revert all enabled feature module on your site.\
 (fr-all, fra)\
 features-update (fu)  Update a feature module on your site.\
 features-update-all   Update all feature modules on your site.\
 (fu-all, fua)\
All commands in field: (field)\
 field-clone           Clone a field and all its instances.\
 field-create          Create fields and instances. Returns urls for field editing.\
 field-delete          Delete a field and its instances.\
 field-info            View information about fields, field_types, and widgets.\
 field-update          Return URL for field editing web page.\
All commands in make: (make)\
 make                  Turns a makefile into a working Drupal codebase.\
 make-convert          Convert a legacy makefile into YAML format.\
 make-generate         Generate a makefile from the current Drupal site.\
 (generate-makefile)\
 make-update           Process a makefile and outputs an equivalent makefile with projects version resolved to latest available.\
All commands in migrate: (migrate)\
 migrate-analyze       Analyze the source fields for a migration.\
 (maz)\
 migrate-audit (ma)    View information on problems in a migration.\
 migrate-auto-registe  Register any newly defined migration classes\
 r (mar)\
 migrate-deregister    Remove all tracking of a migration\
 migrate-fields-desti  List the fields available for mapping in a destination.\
 nation (mfd)\
 migrate-fields-sourc  List the fields available for mapping from a source.\
 e (mfs)\
 migrate-import (mi)   Perform one or more migration processes\
 migrate-mappings      View information on all field mappings in a migration.\
 (mm)\
 migrate-messages      View any messages associated with a migration.\
 (mmsg)\
 migrate-register      Register or reregister any statically defined migrations\
 (mreg)\
 migrate-reset-status  Reset a active migration's status to idle\
 (mrs)\
 migrate-rollback      Roll back the destination objects from a given migration\
 (mr)\
 migrate-status (ms)   List all migrations with current status.\
 migrate-stop (mst)    Stop an active migration operation\
 migrate-wipe (mw)     Delete all nodes from specified content types.\
All commands in pm: (pm)\
 pm-disable (dis)      Disable one or more extensions (modules or themes).\
 pm-download (dl)      Download projects from drupal.org or other sources.\
 pm-enable (en)        Enable one or more extensions (modules or themes).\
 pm-info (pmi)         Show detailed info for one or more extensions (modules or themes).\
 pm-list (pml)         Show a list of available extensions (modules and themes).\
 pm-refresh (rf)       Refresh update status information.\
 pm-releasenotes       Print release notes for given projects.\
 (rln)\
 pm-releases (rl)      Print release information for given projects.\
 pm-uninstall (pmu)    Uninstall one or more modules.\
 pm-update (up)        Update Drupal core and contrib projects and apply any pending database updates (Same as pm-updatecode + updatedb).\
 pm-updatecode (upc)   Update Drupal core and contrib projects to latest recommended releases.\
 pm-updatestatus       Show a report of available minor updates to Drupal core and contrib projects.\
 (ups)\
All commands in role: (role)\
 role-add-perm (rap)   Grant specified permission(s) to a role.\
 role-create (rcrt)    Create a new role.\
 role-delete (rdel)    Delete a role.\
 role-list (rls)       Display a list of all roles defined on the system.  If a role name is provided as an argument, then all of the permissions of that role will be listed.\
                       If a permission name is provided as an option, then all of the roles that have been granted that permission will be listed.\
 role-remove-perm      Remove specified permission(s) from a role.\
 (rmp)\
All commands in search_api: (search_api)\
 search-api-clear      Clear one or all search indexes and mark them for re-indexing.\
 (sapi-c)\
 search-api-disable    Disable one or all enabled search_api indexes.\
 (sapi-dis)\
 search-api-enable     Enable one or all disabled search_api indexes.\
 (sapi-en)\
 search-api-index      Index items for one or all enabled search_api indexes.\
 (sapi-i)\
 search-api-list       List all search indexes.\
 (sapi-l)\
 search-api-reindex    Force reindexing of one or all search indexes, without clearing existing index data.\
 (sapi-r)\
 search-api-server-di  Disable a search server.\
 sable (sapi-sd)\
 search-api-server-en  Enable a search server.\
 able (sapi-se)\
 search-api-server-li  List all search servers.\
 st (sapi-sl)\
 search-api-set-index  Set the search server used by a given index.\
 -server (sapi-sis)\
 search-api-status     Show the status of one or all search indexes.\
 (sapi-s)\
All commands in sql: (sql)\
 sql-cli (sqlc)        Open a SQL command-line interface using Drupal's credentials.\
 sql-connect           A string for connecting to the DB.\
 sql-create            Create a database.\
 sql-drop              Drop all tables in a given database.\
 sql-dump              Exports the Drupal DB as SQL using mysqldump or equivalent.\
 sql-query (sqlq)      Execute a query against a database.\
 sql-sanitize          Run sanitization operations on the current database.\
 (sqlsan)\
All commands in user: (user)\
 user-add-role (urol)  Add a role to the specified user accounts.\
 user-block (ublk)     Block the specified user(s).\
 user-cancel (ucan)    Cancel a user account with the specified name.\
 user-create (ucrt)    Create a user account with the specified name.\
 user-information      Print information about the specified user(s).\
 (uinf)\
 user-login (uli)      Display a one time login link for the given user account (defaults to uid 1).\
 user-password (upwd)  (Re)Set the password for the user account with the specified name.\
 user-remove-role      Remove a role from the specified user accounts.\
 (urrol)\
 user-unblock (uublk)  Unblock the specified user(s).\
All commands in views: (views)\
 views-analyze (va)    Get a list of all Views analyze warnings\
 views-dev (vd)        Set the Views settings to more developer-oriented values.\
 views-disable (vdis)  Disable the specified views.\
 views-enable (ven)    Enable the specified views.\
 views-list (vl)       Get a list of all views in the system.\
 views-revert (vr)     Revert overridden views to their default state. Make sure to backup first.\
Other commands: (adminrole,archive,browse,chosen,cli,topic,defaultconfig,dkan_fixtures,eck,fontyourface,image,libraries,open_data_schema_map,og,open_data_schema_pod,geo_file_entity_geojson_bundle,queue,registry_rebuild,rules,rules_scheduler,runserver,schema,search,services,shellalias,sitealias,site_install,ssh,sqlsync,state,strongarm,taxonomy_fixtures,usage,uuid,variable,views_bulk_operations,watchdog)\
 adminrole-update      Update the administrator role permissions.\
 archive-dump (ard,    Backup your code, files, and database into a single file.\
 archive-backup, arb)\
 archive-restore       Expand a site archive into a Drupal web site.\
 (arr)\
 browse                Display a link to a given path or open link in a browser.\
 chosen-plugin         Download and install the Chosen plugin.\
 (chosenplugin)\
 core-cli (php)        Open an interactive shell on a Drupal site.\
 core-topic (topic)    Read detailed documentation on a given topic.\
 defaultconfig-rebuil  Rebuild all default configurations.\
 d-all (dra)\
 dkan-save-data (dsd)  Creates JSON files out of dkan api endpoints\
 entity-construction-  Show fields attached to a selected entity and bundle created by entity construction kit.\
 kit (eck)\
 entity-construction-  List all of the entities, bundles, and attached fields created by entity construction kit.\
 kit-all (eck-all)\
 fyf-import (fyfi)     Imports fonts from one or more providers\
 fyf-status (fyfs)     Displays general @font-your-face status information\
 image-derive (id)     Create an image derivative.\
 image-flush (if)      Flush all derived images for a given style.\
 libraries-download    Download library files of registered libraries.\
 (ldl, lib-download)\
 libraries-list (lls,  Show a list of registered libraries.\
 lib-list)\
 odsm-filecache        .\
 (odsmfc)\
 og-add-entity         Add one or more entity instances to a group.\
 og-add-user           Add one or more users to a group.\
 open-data-schema-pod  Validates local data.json\
 -validate\
 (data-json-validate)\
 preload-geojson       Create a base of commonly used geojson files eg: USA States\
 (pre-geo)\
 queue-list            Returns a list of all defined queues\
 queue-run             Run a specific queue by name\
 registry-rebuild      Rebuild the registry table (for classes) and the system table (for module locations) in a Drupal install.\
 (rr)\
 rules-disable (rd)    Disable a rule on your site.\
 rules-enable (re)     Enable a rule on your site.\
 rules-list (rules)    List all the active and inactive rules for your site.\
 rules-scheduler-task  Checks for scheduled tasks to be added to the queue.\
 s (rusch)\
 runserver (rs)        Runs PHP's built-in http server for development.\
 schema-compare        List tables that match, mismatch, are missing or are extra\
 schema-inspect        Show the Drupal schema definition for table(s)\
 search-index          Index the remaining search items without wiping the index.\
 search-reindex        Force the search index to be rebuilt.\
 search-status         Show how many items remain to be indexed out of the total.\
 services-security-up  Run the updates for services 7.x-3.9 security update.\
 date-1\
 shell-alias (sha)     Print all known shell alias records.\
 site-alias (sa)       Print site alias records for all known site aliases and local sites.\
 site-set (use)        Set a site alias to work on that will persist for the current session.\
 site-install (si)     Install Drupal along with modules/themes/configuration using the specified install profile.\
 site-ssh (ssh)        Connect to a Drupal site's server via SSH for an interactive session or to run a shell command\
 sql-sync              Copies the database contents from a source site to a target site. Transfers the database dump via rsync.\
 state-delete (sdel)   Delete a state value.\
 state-get (sget)      Display a state value.\
 state-set (sset)      Set a state value.\
 strongarm-revert      Revert all strongarmed variables from code to the database.\
 taxonomy-fixtures     LTAR Collections drush commands\
 (tf)\
 usage-send (usend)    Send anonymous Drush usage information to statistics logging site.  Usage statistics contain the Drush command name and the Drush option names, but no\
                       arguments or option values.\
 usage-show (ushow)    Show Drush usage information that has been logged but not sent.  Usage statistics contain the Drush command name and the Drush option names, but no\
                       arguments or option values.\
 uuid-create-missing   Create missing UUIDs for enabled entities.\
 (uuid-create)\
 variable-delete       Delete a variable.\
 (vdel)\
 variable-get (vget)   Get a list of some or all site variables and values.\
 variable-set (vset)   Set a variable.\
 vbo-execute           Execute a bulk operation based on a Views Bulk Operations (VBO) view.\
 vbo-list              List all Views Bulk Operations (VBO) views, along with the operations associated with each.\
 watchdog-delete       Delete watchdog messages.\
 (wd-del, wd-delete)\
 watchdog-list         Show available message types and severity levels. A prompt will ask for a choice to show watchdog messages.\
 (wd-list)\
 watchdog-show         Show watchdog messages.\
 (wd-show, ws)
