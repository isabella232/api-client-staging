// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/operation.proto

package com.google.appengine.v1;

public interface OperationMetadataV1OrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.appengine.v1.OperationMetadataV1)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * API method that initiated this operation. Example:
   * `google.appengine.v1.Versions.CreateVersion`.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string method = 1;</code>
   */
  java.lang.String getMethod();
  /**
   * <pre>
   * API method that initiated this operation. Example:
   * `google.appengine.v1.Versions.CreateVersion`.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string method = 1;</code>
   */
  com.google.protobuf.ByteString
      getMethodBytes();

  /**
   * <pre>
   * Time that this operation was created.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp insert_time = 2;</code>
   */
  boolean hasInsertTime();
  /**
   * <pre>
   * Time that this operation was created.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp insert_time = 2;</code>
   */
  com.google.protobuf.Timestamp getInsertTime();
  /**
   * <pre>
   * Time that this operation was created.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp insert_time = 2;</code>
   */
  com.google.protobuf.TimestampOrBuilder getInsertTimeOrBuilder();

  /**
   * <pre>
   * Time that this operation completed.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 3;</code>
   */
  boolean hasEndTime();
  /**
   * <pre>
   * Time that this operation completed.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 3;</code>
   */
  com.google.protobuf.Timestamp getEndTime();
  /**
   * <pre>
   * Time that this operation completed.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>.google.protobuf.Timestamp end_time = 3;</code>
   */
  com.google.protobuf.TimestampOrBuilder getEndTimeOrBuilder();

  /**
   * <pre>
   * User who requested this operation.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string user = 4;</code>
   */
  java.lang.String getUser();
  /**
   * <pre>
   * User who requested this operation.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string user = 4;</code>
   */
  com.google.protobuf.ByteString
      getUserBytes();

  /**
   * <pre>
   * Name of the resource that this operation is acting on. Example:
   * `apps/myapp/services/default`.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string target = 5;</code>
   */
  java.lang.String getTarget();
  /**
   * <pre>
   * Name of the resource that this operation is acting on. Example:
   * `apps/myapp/services/default`.
   * &#64;OutputOnly
   * </pre>
   *
   * <code>string target = 5;</code>
   */
  com.google.protobuf.ByteString
      getTargetBytes();
}