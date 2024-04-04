## FarmerApi

**Description:**
The FarmerApi is designed to provide data about the crops harvested by a farmer. It offers endpoints for retrieving information about available crops as well as details for specific crops.

**Server IP Address:** 16.171.235.91

### Endpoints:

1. **Display all crops available by user**

   - **Endpoint:** [http://16.171.235.91/farmerapi/display_crops.php?show=true](http://16.171.235.91/farmerapi/display_crops.php?show=true)
   - **Request Type:** GET

2. **Display details for a particular crop**

   - **Endpoint:** [http://16.171.235.91/farmerapi/display_crop_action.php](http://16.171.235.91/farmerapi/display_crop_action.php)
   - **Request Type:** POST

### Data Format:

All data communicated through this API is in JSON format.

### Usage:

1. **Display all crops available by user:**

   To retrieve a list of all available crops, send a GET request to the specified endpoint:
   ```
   GET http://16.171.235.91/farmerapi/display_crops.php?show=true
   ```

2. **Display details for a particular crop:**

   To get details for a specific crop, send a POST request to the provided endpoint along with the necessary parameters.

### Example:

```bash
# Display all crops available
curl -X GET http://16.171.235.91/farmerapi/display_crops.php?show=true

# Display details for a particular crop
curl -X POST http://16.171.235.91/farmerapi/display_crop_action.php -d "crop_id=<crop_id>"
```

Replace `<crop_id>` with the ID of the crop for which you want to retrieve details.

### Response Format:

The response for both endpoints will be in JSON format, providing relevant information about the crops.

---
