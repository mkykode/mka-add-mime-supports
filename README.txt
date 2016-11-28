# Add Additional Mime Supports to Wordpress

Add a class to add additional mime supports.

Add your mime name and mime type format to method add_mime_type, then fire the load method.
For example:
MimeSupport::add_mime_type( 'svg', 'image/svg+xml' );
MimeSupport::load();



