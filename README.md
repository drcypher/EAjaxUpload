BogoYiiJsonService
==================

[Fineuploader](https://github.com/Widen/fine-uploader) (ajax uploader) integration with Yii Framework.

Currently supported fineuploader version is 3.4.1 (Released April 1, 2013).

This is a fork of [kosenka/EAjaxUpload](https://github.com/kosenka/EAjaxUpload).

It has been heavily refactored, breaking backward compatibility with original extension:
* Classes have been renamed to avoid amibuity
* `EAjaxUploadWidget` reflects Fineuploader's new API and options
* `qqFileUploadhandler` has been refactored to avoid initialization of optional parameters in the constructor and documented (phpdoc)


Note: After this fork gets the required testing, a pull request will be made to the original author.

## References

* [Fineuploader Official Site](http://fineuploader.com/)