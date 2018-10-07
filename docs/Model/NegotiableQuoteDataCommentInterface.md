# NegotiableQuoteDataCommentInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entityId** | **int** | Comment ID. | 
**parentId** | **int** | Negotiable quote ID, that this comment belongs to. | 
**creatorType** | **int** | The comment creator type. | 
**isDecline** | **int** | Is quote was declined by seller. | 
**isDraft** | **int** | Is quote draft flag. | 
**creatorId** | **int** | Comment creator ID. | 
**comment** | **string** | Comment. | 
**createdAt** | **string** | Comment created at. | 
**extensionAttributes** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteDataCommentExtensionInterface**](NegotiableQuoteDataCommentExtensionInterface.md) |  | [optional] 
**attachments** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteDataCommentAttachmentInterface[]**](NegotiableQuoteDataCommentAttachmentInterface.md) | Existing attachments. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


