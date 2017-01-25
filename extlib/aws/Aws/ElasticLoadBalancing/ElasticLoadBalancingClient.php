<?php
namespace Aws\ElasticLoadBalancing;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 *
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result applySecurityGroupsToLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise applySecurityGroupsToLoadBalancerAsync(array $args = [])
 * @method \Aws\Result attachLoadBalancerToSubnets(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise attachLoadBalancerToSubnetsAsync(array $args = [])
 * @method \Aws\Result configureHealthCheck(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise configureHealthCheckAsync(array $args = [])
 * @method \Aws\Result createAppCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createAppCookieStickinessPolicyAsync(array $args = [])
 * @method \Aws\Result createLBCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createLBCookieStickinessPolicyAsync(array $args = [])
 * @method \Aws\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \Aws\Result createLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createLoadBalancerListenersAsync(array $args = [])
 * @method \Aws\Result createLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createLoadBalancerPolicyAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteLoadBalancerListenersAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteLoadBalancerPolicyAsync(array $args = [])
 * @method \Aws\Result deregisterInstancesFromLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deregisterInstancesFromLoadBalancerAsync(array $args = [])
 * @method \Aws\Result describeInstanceHealth(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeInstanceHealthAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeLoadBalancerAttributesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerPolicies(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeLoadBalancerPoliciesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerPolicyTypes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeLoadBalancerPolicyTypesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result detachLoadBalancerFromSubnets(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise detachLoadBalancerFromSubnetsAsync(array $args = [])
 * @method \Aws\Result disableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise disableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \Aws\Result enableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise enableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \Aws\Result modifyLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise modifyLoadBalancerAttributesAsync(array $args = [])
 * @method \Aws\Result registerInstancesWithLoadBalancer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise registerInstancesWithLoadBalancerAsync(array $args = [])
 * @method \Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerListenerSSLCertificate(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise setLoadBalancerListenerSSLCertificateAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerPoliciesForBackendServer(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise setLoadBalancerPoliciesForBackendServerAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerPoliciesOfListener(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise setLoadBalancerPoliciesOfListenerAsync(array $args = [])
 */
class ElasticLoadBalancingClient extends AwsClient {}
