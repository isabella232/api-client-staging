/*
 * Copyright 2017, Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * A client to Cloud Spanner API.
 *
 * <p>The interfaces provided are listed below, along with usage samples.
 *
 * <p>============= SpannerClient =============
 *
 * <p>Service Description: Cloud Spanner API
 *
 * <p>The Cloud Spanner API can be used to manage sessions and execute transactions on data stored
 * in Cloud Spanner databases.
 *
 * <p>Sample for SpannerClient:
 *
 * <pre>
 * <code>
 * try (SpannerClient spannerClient = SpannerClient.create()) {
 *   DatabaseName database = DatabaseName.create("[PROJECT]", "[INSTANCE]", "[DATABASE]");
 *   Session response = spannerClient.createSession(database);
 * }
 * </code>
 * </pre>
 */
package com.google.cloud.spanner.v1;