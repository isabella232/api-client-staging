import grpc
from grpc.framework.common import cardinality
from grpc.framework.interfaces.face import utilities as face_utilities

import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2
import google.cloud.grpc.datastore.v1.datastore_pb2 as google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2


class DatastoreStub(object):
  """Each RPC normalizes the partition IDs of the keys in its input entities,
  and always returns entities with keys with normalized partition IDs.
  This applies to all keys and entities, including those in values, except keys
  with both an empty path and an empty or unset partition ID. Normalization of
  input keys sets the project ID (if not already set) to the project ID from
  the request.

  """

  def __init__(self, channel):
    """Constructor.

    Args:
      channel: A grpc.Channel.
    """
    self.Lookup = channel.unary_unary(
        '/google.datastore.v1.Datastore/Lookup',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.LookupRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.LookupResponse.FromString,
        )
    self.RunQuery = channel.unary_unary(
        '/google.datastore.v1.Datastore/RunQuery',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RunQueryRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RunQueryResponse.FromString,
        )
    self.BeginTransaction = channel.unary_unary(
        '/google.datastore.v1.Datastore/BeginTransaction',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.BeginTransactionRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.BeginTransactionResponse.FromString,
        )
    self.Commit = channel.unary_unary(
        '/google.datastore.v1.Datastore/Commit',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.CommitRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.CommitResponse.FromString,
        )
    self.Rollback = channel.unary_unary(
        '/google.datastore.v1.Datastore/Rollback',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RollbackRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RollbackResponse.FromString,
        )
    self.AllocateIds = channel.unary_unary(
        '/google.datastore.v1.Datastore/AllocateIds',
        request_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.AllocateIdsRequest.SerializeToString,
        response_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.AllocateIdsResponse.FromString,
        )


class DatastoreServicer(object):
  """Each RPC normalizes the partition IDs of the keys in its input entities,
  and always returns entities with keys with normalized partition IDs.
  This applies to all keys and entities, including those in values, except keys
  with both an empty path and an empty or unset partition ID. Normalization of
  input keys sets the project ID (if not already set) to the project ID from
  the request.

  """

  def Lookup(self, request, context):
    """Looks up entities by key.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')

  def RunQuery(self, request, context):
    """Queries for entities.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')

  def BeginTransaction(self, request, context):
    """Begins a new transaction.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')

  def Commit(self, request, context):
    """Commits a transaction, optionally creating, deleting or modifying some
    entities.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')

  def Rollback(self, request, context):
    """Rolls back a transaction.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')

  def AllocateIds(self, request, context):
    """Allocates IDs for the given keys, which is useful for referencing an entity
    before it is inserted.
    """
    context.set_code(grpc.StatusCode.UNIMPLEMENTED)
    context.set_details('Method not implemented!')
    raise NotImplementedError('Method not implemented!')


def add_DatastoreServicer_to_server(servicer, server):
  rpc_method_handlers = {
      'Lookup': grpc.unary_unary_rpc_method_handler(
          servicer.Lookup,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.LookupRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.LookupResponse.SerializeToString,
      ),
      'RunQuery': grpc.unary_unary_rpc_method_handler(
          servicer.RunQuery,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RunQueryRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RunQueryResponse.SerializeToString,
      ),
      'BeginTransaction': grpc.unary_unary_rpc_method_handler(
          servicer.BeginTransaction,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.BeginTransactionRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.BeginTransactionResponse.SerializeToString,
      ),
      'Commit': grpc.unary_unary_rpc_method_handler(
          servicer.Commit,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.CommitRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.CommitResponse.SerializeToString,
      ),
      'Rollback': grpc.unary_unary_rpc_method_handler(
          servicer.Rollback,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RollbackRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.RollbackResponse.SerializeToString,
      ),
      'AllocateIds': grpc.unary_unary_rpc_method_handler(
          servicer.AllocateIds,
          request_deserializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.AllocateIdsRequest.FromString,
          response_serializer=google_dot_cloud_dot_grpc_dot_datastore_dot_v1_dot_datastore__pb2.AllocateIdsResponse.SerializeToString,
      ),
  }
  generic_handler = grpc.method_handlers_generic_handler(
      'google.datastore.v1.Datastore', rpc_method_handlers)
  server.add_generic_rpc_handlers((generic_handler,))
