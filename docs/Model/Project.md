# Project

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique ID for the project.  A string in the format &#x60;project_[0-9a-z]&#x60;. | [optional] 
**created_at** | **string** | The date the project was created. | [optional] 
**updated_at** | **string** | The date the project was last updated. | [optional] 
**type** | [**AllOfProjectType**](AllOfProjectType.md) | A string of &#x60;controlled&#x60; | &#x60;uncontrolled&#x60;. Denotes whether the project has been explicitly created by calling the &#x60;createProject&#x60; end point. An explicitly created project will be of type &#x60;controlled&#x60;, while a project implicitly created through a payment intent is considered &#x60;uncontrolled&#x60;. | [optional] 
**currency** | [**AllOfProjectCurrency**](AllOfProjectCurrency.md) | The currency the project account is held in. | [optional] 
**status** | [**AllOfProjectStatus**](AllOfProjectStatus.md) | The status of the project. | [optional] 
**balance** | **int** |  | [optional] 
**checkouts** | [**\Swagger\Client\Model\AllOfProjectCheckoutsItems[]**](.md) | A list of checkouts that have funded the project. | [optional] 
**settlements** | [**\Swagger\Client\Model\AllOfProjectSettlementsItems[]**](.md) | A list of settlements against the project. | [optional] 
**inbounds** | [**\Swagger\Client\Model\AllOfProjectInboundsItems[]**](.md) | A list of inbounds which denote physical receipt of funds into project account. | [optional] 
**outbounds** | [**\Swagger\Client\Model\AllOfProjectOutboundsItems[]**](.md) | A list of releases and refunds that have sent funds from the project account. | [optional] 
**account** | [**AllOfProjectAccount**](AllOfProjectAccount.md) | Payment details for the underlying account that all project funds are held in. | [optional] 
**metadata** | **object** | The metadata that was provided at the creation of the project. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

