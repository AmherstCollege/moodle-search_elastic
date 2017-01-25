<?php
namespace Aws\ServiceCatalog;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog** service.
 * @method \Aws\Result acceptPortfolioShare(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise acceptPortfolioShareAsync(array $args = [])
 * @method \Aws\Result associatePrincipalWithPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise associatePrincipalWithPortfolioAsync(array $args = [])
 * @method \Aws\Result associateProductWithPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise associateProductWithPortfolioAsync(array $args = [])
 * @method \Aws\Result createConstraint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createConstraintAsync(array $args = [])
 * @method \Aws\Result createPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createPortfolioAsync(array $args = [])
 * @method \Aws\Result createPortfolioShare(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createPortfolioShareAsync(array $args = [])
 * @method \Aws\Result createProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createProductAsync(array $args = [])
 * @method \Aws\Result createProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createProvisioningArtifactAsync(array $args = [])
 * @method \Aws\Result deleteConstraint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteConstraintAsync(array $args = [])
 * @method \Aws\Result deletePortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deletePortfolioAsync(array $args = [])
 * @method \Aws\Result deletePortfolioShare(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deletePortfolioShareAsync(array $args = [])
 * @method \Aws\Result deleteProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteProductAsync(array $args = [])
 * @method \Aws\Result deleteProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteProvisioningArtifactAsync(array $args = [])
 * @method \Aws\Result describeConstraint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeConstraintAsync(array $args = [])
 * @method \Aws\Result describePortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describePortfolioAsync(array $args = [])
 * @method \Aws\Result describeProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeProductAsync(array $args = [])
 * @method \Aws\Result describeProductAsAdmin(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeProductAsAdminAsync(array $args = [])
 * @method \Aws\Result describeProductView(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeProductViewAsync(array $args = [])
 * @method \Aws\Result describeProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeProvisioningArtifactAsync(array $args = [])
 * @method \Aws\Result describeProvisioningParameters(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeProvisioningParametersAsync(array $args = [])
 * @method \Aws\Result describeRecord(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeRecordAsync(array $args = [])
 * @method \Aws\Result disassociatePrincipalFromPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise disassociatePrincipalFromPortfolioAsync(array $args = [])
 * @method \Aws\Result disassociateProductFromPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise disassociateProductFromPortfolioAsync(array $args = [])
 * @method \Aws\Result listAcceptedPortfolioShares(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listAcceptedPortfolioSharesAsync(array $args = [])
 * @method \Aws\Result listConstraintsForPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listConstraintsForPortfolioAsync(array $args = [])
 * @method \Aws\Result listLaunchPaths(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listLaunchPathsAsync(array $args = [])
 * @method \Aws\Result listPortfolioAccess(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listPortfolioAccessAsync(array $args = [])
 * @method \Aws\Result listPortfolios(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listPortfoliosAsync(array $args = [])
 * @method \Aws\Result listPortfoliosForProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listPortfoliosForProductAsync(array $args = [])
 * @method \Aws\Result listPrincipalsForPortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listPrincipalsForPortfolioAsync(array $args = [])
 * @method \Aws\Result listProvisioningArtifacts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listProvisioningArtifactsAsync(array $args = [])
 * @method \Aws\Result listRecordHistory(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise listRecordHistoryAsync(array $args = [])
 * @method \Aws\Result provisionProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise provisionProductAsync(array $args = [])
 * @method \Aws\Result rejectPortfolioShare(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise rejectPortfolioShareAsync(array $args = [])
 * @method \Aws\Result scanProvisionedProducts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise scanProvisionedProductsAsync(array $args = [])
 * @method \Aws\Result searchProducts(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise searchProductsAsync(array $args = [])
 * @method \Aws\Result searchProductsAsAdmin(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise searchProductsAsAdminAsync(array $args = [])
 * @method \Aws\Result terminateProvisionedProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise terminateProvisionedProductAsync(array $args = [])
 * @method \Aws\Result updateConstraint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateConstraintAsync(array $args = [])
 * @method \Aws\Result updatePortfolio(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updatePortfolioAsync(array $args = [])
 * @method \Aws\Result updateProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateProductAsync(array $args = [])
 * @method \Aws\Result updateProvisionedProduct(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateProvisionedProductAsync(array $args = [])
 * @method \Aws\Result updateProvisioningArtifact(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateProvisioningArtifactAsync(array $args = [])
 */
class ServiceCatalogClient extends AwsClient {}
