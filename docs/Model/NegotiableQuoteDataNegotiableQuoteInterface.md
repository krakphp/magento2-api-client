# NegotiableQuoteDataNegotiableQuoteInterface

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**quoteId** | **int** | Negotiable quote ID. | 
**isRegularQuote** | **bool** | Is regular quote. | 
**status** | **string** | Negotiable quote status. | 
**negotiatedPriceType** | **int** | Negotiated price type. | 
**negotiatedPriceValue** | **float** | Negotiated price value. | 
**shippingPrice** | **float** | Proposed shipping price. | 
**quoteName** | **string** | Negotiable quote name. | 
**expirationPeriod** | **string** | Expiration period. | 
**emailNotificationStatus** | **int** | Email notification status. | 
**hasUnconfirmedChanges** | **bool** | Has unconfirmed changes. | 
**isShippingTaxChanged** | **bool** | Shipping tax changes. | 
**isCustomerPriceChanged** | **bool** | Customer price changes. | 
**notifications** | **int** | Quote notifications. | 
**appliedRuleIds** | **string** | Quote rules. | 
**isAddressDraft** | **bool** | Is address draft. | 
**deletedSku** | **string** | Deleted products sku. | 
**creatorId** | **int** | Quote creator id. | 
**creatorType** | **int** | Quote creator type. | 
**originalTotalPrice** | **float** | Quote original total price. | [optional] 
**baseOriginalTotalPrice** | **float** | Quote original total price in base currency. | [optional] 
**negotiatedTotalPrice** | **float** | Quote negotiated total price. | [optional] 
**baseNegotiatedTotalPrice** | **float** | Quote negotiated total price in base currency. | [optional] 
**extensionAttributes** | [**\Krak\MagentoApiClient\Model\NegotiableQuoteDataNegotiableQuoteExtensionInterface**](NegotiableQuoteDataNegotiableQuoteExtensionInterface.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


