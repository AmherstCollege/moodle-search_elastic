<?php
namespace Aws\Pinpoint;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Pinpoint** service.
 * @method \Aws\Result createCampaign(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createCampaignAsync(array $args = [])
 * @method \Aws\Result createImportJob(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createImportJobAsync(array $args = [])
 * @method \Aws\Result createSegment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise createSegmentAsync(array $args = [])
 * @method \Aws\Result deleteApnsChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteApnsChannelAsync(array $args = [])
 * @method \Aws\Result deleteCampaign(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteCampaignAsync(array $args = [])
 * @method \Aws\Result deleteGcmChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteGcmChannelAsync(array $args = [])
 * @method \Aws\Result deleteSegment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise deleteSegmentAsync(array $args = [])
 * @method \Aws\Result getApnsChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getApnsChannelAsync(array $args = [])
 * @method \Aws\Result getApplicationSettings(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getApplicationSettingsAsync(array $args = [])
 * @method \Aws\Result getCampaign(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getCampaignAsync(array $args = [])
 * @method \Aws\Result getCampaignActivities(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getCampaignActivitiesAsync(array $args = [])
 * @method \Aws\Result getCampaignVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getCampaignVersionAsync(array $args = [])
 * @method \Aws\Result getCampaignVersions(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getCampaignVersionsAsync(array $args = [])
 * @method \Aws\Result getCampaigns(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getCampaignsAsync(array $args = [])
 * @method \Aws\Result getEndpoint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getEndpointAsync(array $args = [])
 * @method \Aws\Result getGcmChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getGcmChannelAsync(array $args = [])
 * @method \Aws\Result getImportJob(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getImportJobAsync(array $args = [])
 * @method \Aws\Result getImportJobs(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getImportJobsAsync(array $args = [])
 * @method \Aws\Result getSegment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSegmentAsync(array $args = [])
 * @method \Aws\Result getSegmentImportJobs(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSegmentImportJobsAsync(array $args = [])
 * @method \Aws\Result getSegmentVersion(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSegmentVersionAsync(array $args = [])
 * @method \Aws\Result getSegmentVersions(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSegmentVersionsAsync(array $args = [])
 * @method \Aws\Result getSegments(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise getSegmentsAsync(array $args = [])
 * @method \Aws\Result updateApnsChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateApnsChannelAsync(array $args = [])
 * @method \Aws\Result updateApplicationSettings(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateApplicationSettingsAsync(array $args = [])
 * @method \Aws\Result updateCampaign(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateCampaignAsync(array $args = [])
 * @method \Aws\Result updateEndpoint(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateEndpointAsync(array $args = [])
 * @method \Aws\Result updateEndpointsBatch(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateEndpointsBatchAsync(array $args = [])
 * @method \Aws\Result updateGcmChannel(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateGcmChannelAsync(array $args = [])
 * @method \Aws\Result updateSegment(array $args = [])
 * @method \GuzzleHttpv6\Promise\Promise updateSegmentAsync(array $args = [])
 */
class PinpointClient extends AwsClient {}
